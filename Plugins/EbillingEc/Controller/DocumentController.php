<?php


namespace FacturaScripts\Plugins\EbillingEc\Controller;

use FacturaScripts\Core\App\AppSettings;
use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Model\Base\BusinessDocument;
use FacturaScripts\Core\Model\FacturaCliente;
use FacturaScripts\Core\Model\Proveedor;
use FacturaScripts\Dinamic\Model\Impuesto;
use FacturaScripts\Core\Base\NumberTools;
use FacturaScripts\Dinamic\Model\NotaCreCliente;
use FacturaScripts\Dinamic\Model\OperacionEbilling;
use FacturaScripts\Dinamic\Model\RetencionIva;
use FacturaScripts\Dinamic\Model\RetencionProveedor;
use FacturaScripts\Dinamic\Model\RetencionRenta;
use FacturaScripts\Dinamic\Model\SecuenciaDocumento;
use FacturaScripts\Dinamic\Model\Serie;
use FacturaScripts\Dinamic\Model\SuppliersSerie;
use FacturaScripts\Plugins\EbillingEc\Lib\APIConsumer;
use FacturaScripts\Core\Base\ToolBox;
use FacturaScripts\Dinamic\Model\FacturaProveedor;
use FacturaScripts\Dinamic\Model\Cliente;
use FacturaScripts\Plugins\EbillingEc\Model\LogEbilling;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;


class DocumentController extends Controller
{

    const INVOICE_TYPE = "01";
    const LIQUI_TYPE = "03";
    const NC_TYPE = "04";
    const ND_TYPE = "05";
    const GUI_TYPE = "06";
    const RETENTION_TYPE = "07";
    const URL_PRUEBAS_RECEPCION = "https://celcer.sri.gob.ec/comprobantes-electronicos-ws/RecepcionComprobantesOffline?wsdl";
    const URL_PRO_RECEPCION = "https://cel.sri.gob.ec/comprobantes-electronicos-ws/RecepcionComprobantesOffline?wsdl";

    public static $Decimals;

    public $idFiscal = ['RUC'=>'04','CI'=>'05','Pasaporte' => '06','CF' => '07','Placa' => '09','IDFE' => '08' ];
    public $numberTools;
    protected $api_domain;
    protected $api_token;

    public function getPageData()
    {
        $pageData = parent::getPageData();
        $pageData['showonmenu'] = false;

        return $pageData;
    }



    public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);
        $this->setValues();
        $this->numberTools = new NumberTools();

        self::$Decimals = AppSettings::get('default', 'decimals');

        $type = input('type', 'post', 'string');
        $action = input('action', 'post', 'string');

        if($action === 'generate'){
            switch ($type){
                case "invoice":
                    $document['type'] = self::INVOICE_TYPE;
                    $this->createInvoice($document);
                    break;
                case "retention":
                    $document['type'] = self::RETENTION_TYPE;
                    $this->createRetention($document);
                    break;
                case "note":
                    $document['type'] = self::NC_TYPE;
                    $this->createNotaCredito($document);
                    break;
                case "notadebito":
                    $document['type'] = self::ND_TYPE;
                    $this->createNotaDebito();
                    break;
                case "guiaremision":
                    $document['type'] = self::GUI_TYPE;
                    $this->createGuiaRemision();
                    break;
                default:
                    return false;
            }
        }else
            switch ($type){
                case "invoice":

                    $where = [new DataBaseWhere('iddocumento', input('iddocument')), new DataBaseWhere('tipodocumento', 'factura')];
                    $op = new OperacionEbilling();

                    $op->loadFromCode('', $where);
                       switch ($action){
                           case "sign":
                               $this->signDocument($op);
                                break;
                           case "auth" :
                               $this->authDocument($op);
                                break;
                           case "print":
                               $this->printDocument($op);
                                break;
                           case "getXml":
                               $this->getXml($op);
                                break;
                           case "sendEmail":
                               $this->sendEmail($op);
                               break;
                       }
                    break;
                case "retention":
                    $where = [new DataBaseWhere('iddocumento', input('iddocument')), new DataBaseWhere('tipodocumento', 'retencion')];
                    $op = new OperacionEbilling();
                    $op->loadFromCode('', $where);
                    if($action == 'sign'){
                        $this->signDocument($op);
                    }elseif($action == 'auth'){
                        $this->authDocument($op);
                    }
                    break;
                case "note":
                    $where = [new DataBaseWhere('iddocumento', input('iddocument')), new DataBaseWhere('tipodocumento', 'notacredito')];
                    $op = new OperacionEbilling();
                    $op->loadFromCode('', $where);
                    if($action == 'sign'){
                        $this->signDocument($op);
                    }elseif($action == 'auth'){
                        $this->authDocument($op);
                    }elseif($action == 'print'){
                        $this->printDocument($op);
                    }
                    break;
                case "notadebito":
                 //   $this->createNotaDebito();
                    break;
                case "guiaremision":
                  //  $this->createGuiaRemision();
                    break;
                default:
                    return false;
            }


        $this->setTemplate(false);
    }

    public function signDocument(&$document = null)
    {

        if(!is_null($document)){

            $this->api = new APIConsumer($this->api_domain, $this->api_token);

            $context['accesskey'] = $document->claveacceso;

            $resp = $this->api->signDocument(json_encode($context));

            $logEbilling = new LogEbilling();
            $logEbilling->fecha = date("Y-m-d H:i:s");
            $logEbilling->idoperacion = $document->idoperacion;
            $logEbilling->proceso = "Sing";

            if($resp->success != true){

                $logEbilling->mensaje = "Error al firmar el documento";
                $logEbilling->save();
                if(!is_null($this->response)){
                $context_resp = json_encode(['success' => FALSE]);
                $this->response->setContent($context_resp);
                $this->response->setStatusCode('200');
                }else{
                    echo "error al firmar el {$document->claveacceso} con id {$document->iddocumento} \n";
                }
                return;
            }

            $logEbilling->mensaje = "Exito al firmar el documento";
            $logEbilling->save();

            $document->fechafirma = date("Y-m-d H:i:s");
            $document->save();

            if(!is_null($this->response)){
                $context_resp = json_encode(['success' => true]);
                $this->response->setContent($context_resp);
                $this->response->setStatusCode('200');
            }else{
                echo "exito al firmar el {$document->claveacceso} con id {$document->iddocumento} \n";
            }

        }
    }

    public function authDocument(OperacionEbilling $document = null)
    {

        if(!is_null($document)){

            //Check status server SRI
            $client = new \GuzzleHttp\Client();
            try {
                if($document->ambiente == "1"){
                    $client->request('GET',self::URL_PRUEBAS_RECEPCION);
                }else{
                    $client->request('GET',self::URL_PRO_RECEPCION);
                }
            }catch (GuzzleException $e){
                $context_resp = json_encode(['success' => false, 'msg'=>"Los servicios del SRI no estan disponibles"]);
                $this->response->setContent($context_resp);
                $this->response->setStatusCode('200');
                return;
            }

            $this->api = new APIConsumer($this->api_domain, $this->api_token);

            $context['accesskey'] = $document->claveacceso;

            $resp = $this->api->authDocument(json_encode($context));

            $logEbilling = new LogEbilling();
            $logEbilling->fecha = date("Y-m-d H:i:s");
            $logEbilling->idoperacion = $document->idoperacion;
            $logEbilling->proceso = "Auth";

            if($resp->success != true){

                $logEbilling->mensaje = "Error al auth el documento || {$resp->msg}";
                $logEbilling->xml = $resp->xml;
                $logEbilling->save();

                if(!is_null($this->response)) {
                    $context_resp = json_encode(['success' => $resp->success, 'msg'=>$resp->msg]);
                    $this->response->setContent($context_resp);
                    $this->response->setStatusCode('200');
                }else{
                    echo "error al auth el {$document->claveacceso} con id {$document->iddocumento} \n";
                }
                return;
            }

            $logEbilling->mensaje = "Exito al auth el documento";
            $logEbilling->save();

            $document->fechaautorizacion = date("Y-m-d H:i:s");
            $document->save();

            if(!is_null($this->response)){
                $context_resp = json_encode(['success' => true]);
                $this->response->setContent($context_resp);
                $this->response->setStatusCode('200');
            }else{
                echo "auth el {$document->claveacceso} con id {$document->iddocumento} \n";
            }
        }
    }

    public function printDocument(OperacionEbilling $document = null)
    {

        if(!is_null($document))
        {
            if(is_null($document->pdf)){
                $this->api = new APIConsumer($this->api_domain, $this->api_token);
                $context['accesskey'] = $document->claveacceso;
                $resp = $this->api->printDocument(json_encode($context));

                if($resp->success != true) {
                    if (!is_null($this->response)) {
                        $context_resp = json_encode(['success' => FALSE]);
                        $this->response->setContent($context_resp);
                        $this->response->setStatusCode('200');
                        return;
                    } else {
                        echo "el pdf del document {$document->claveacceso} fallo \n";
                        return false;
                    }
                }

                $pdf = $resp->response;
                $document->pdf = $pdf;
                $document->save();

            }else{
               $pdf = $document->pdf;
            }

            if(!is_null($this->response)){
                $context_resp = json_encode(['success' => true,'pdf'=>$pdf,'claveacceso'=>$document->claveacceso]);
                $this->response->setContent($context_resp);
                $this->response->setStatusCode('200');
                return;
            }

            echo "El pdf del documento {$document->claveacceso} se genero correctamente \n";
            return $pdf;


        }
    }

    public function getXml(OperacionEbilling $document = null)
    {

        if(!is_null($document)){
            $this->api = new APIConsumer($this->api_domain, $this->api_token);

            $context['accesskey'] = $document->claveacceso;

            $resp = $this->api->getXml(json_encode($context));

            if($resp->success != true){
                $context_resp = json_encode(['success' => FALSE]);
                $this->response->setContent($context_resp);
                $this->response->setStatusCode('200');
                return;
            }

            $context_resp = json_encode(['success' => true,'xml'=>$resp->response,'claveacceso'=>$document->claveacceso]);
            $this->response->setContent($context_resp);
            $this->response->setStatusCode('200');


        }
    }

    public function sendEmail(OperacionEbilling $document = null)
    {

        if(!is_null($document)){

            $this->api = new APIConsumer($this->api_domain, $this->api_token);
            if(!is_null($document->getDocument())){
                $subject = $document->getDocument()->getSubject();
                if($subject->email == ''){
                    if(!is_null($this->response)){
                        $context_resp = json_encode(['success' => FALSE, "msg" => "El correo electronico esta vacio"]);
                        $this->response->setContent($context_resp);
                        $this->response->setStatusCode('200');
                        return  false;
                    }else{
                        echo "El correo electronico con id {$document->iddocumento} de tipo {$document->tipodocumento} es vacio \n";
                        return false;
                    }
                }

                $context['documents'][$document->claveacceso]['accessKey'] = $document->claveacceso;
                $context['documents'][$document->claveacceso]['emailCustomer'] = $subject->email;
                $context['documents'][$document->claveacceso]['nameCustomer'] = $subject->razonsocial;
                $context['documents'][$document->claveacceso]['type'] = $document->tipodocumento;


                $resp = $this->api->sendEmail(json_encode($context));

                if($resp->success != true){
                    if(!is_null($this->response)){
                        $context_resp = json_encode(['success' => FALSE]);
                        $this->response->setContent($context_resp);
                        $this->response->setStatusCode('200');
                        return false;
                    }else{
                        echo "El correo electronico con id {$document->iddocumento} de tipo {$document->tipodocumento} fallo al enviar via API \n";
                        return false;
                    }
                }
            }


            if(!is_null($this->response)){
                $context_resp = json_encode(['success' => true,'claveacceso'=>$document->claveacceso,'email' => $subject->email]);
                $this->response->setContent($context_resp);
                $this->response->setStatusCode('200');
                return true;
            }else{
                echo "El correo electronico con id {$document->iddocumento} de tipo {$document->tipodocumento} fue enviado correctamente \n";
                return true;
            }
        }
    }


    public function setValues()
    {

        $this->api_domain = AppSettings::get("ebillingec", "api_domain");
        $this->api_token = AppSettings::get("ebillingec", "apikey");
    }

    public function createInvoice(&$document)
    {

        $invoice = new FacturaCliente();
        $iddocument = (input("iddocument", "post", "int")) ?  input("iddocument", "post", "int") : $document['iddocument'] ;
        $this->empresa = (!is_null($this->empresa->cifnif)) ? $this->empresa : $document['company'];
        $this->user = ($this->user) ? $this->user : $document['user'];


        $invoice = $invoice->get($iddocument);

        if($invoice){
            if($invoice->direccion == ''){
                $invoice->direccion = $this->empresa->ciudad;
                if(!$invoice->save()){
                    if(!is_null($this->response)){
                        $context_resp = json_encode(['success' => FALSE, 'msg' => "La dirección de la factura es vacia imposible generar"]);
                        $this->response->setContent($context_resp);
                        $this->response->setStatusCode('200');
                    }
                    return;
                }
            }

            if($invoice->cifnif == ''){
                $customer = (new Cliente())->get($invoice->codcliente);
                $invoice->cifnif = $customer->cifnif;
                $invoice->save();
            }

            $serie = new Serie();

            if(!$serie->loadFromCode($invoice->codserie)){
                $this->toolBox()->i18nLog()->error('serie-not-found');
                   return false;
            }

            $sequence = new SecuenciaDocumento();
            $where = [new DataBaseWhere('codserie',$serie->codserie),
                      new DataBaseWhere('tipodoc','FacturaCliente'),
                       new DataBaseWhere('codejercicio',$invoice->codejercicio)];

            if(!$sequence->loadFromCode('',$where)){
                $this->toolBox()->i18nLog()->error('sequence-not-found');
                return false;
            }


            $document['header']['numero'] = self::getNumberSri($sequence, $invoice);
            $this->createHeader($document, $serie);

            $customer = new Cliente();
            $customer->loadFromCode($invoice->codcliente);

            if(!key_exists($customer->tipoidfiscal,$this->idFiscal)){
                if(!is_null($this->response)) {
                    $context_resp = json_encode(['success' => FALSE, 'msg' => "El tipo de identificacion fiscal es invalido"]);
                    $this->response->setContent($context_resp);
                    $this->response->setStatusCode('200');
                }
                return;
            }



            $i = 0;
            $discount = 0;
            foreach ($invoice->getLines() as $line){
                $document['invoice']['lines'][$i]['reference'] = $line->referencia;
                $document['invoice']['lines'][$i]['description'] = $line->descripcion;
                $document['invoice']['lines'][$i]['pvpUnit'] = self::NumberToolsGen($line->pvpunitario);
                $document['invoice']['lines'][$i]['count'] = $line->cantidad;
                $document['invoice']['lines'][$i]['codIva'] = $line->iva;
                $document['invoice']['lines'][$i]['pvptotal'] = self::NumberToolsGen($line->pvptotal);
                if($line->pvpsindto != $line->pvptotal){
                    $document['invoice']['lines'][$i]['discount'] = self::NumberToolsGen($line->pvpsindto - $line->pvptotal);
                    $discount += $document['invoice']['lines'][$i]['discount'];
                }else
                    $document['invoice']['lines'][$i]['discount'] = 0;

                $i++;
            }



            $document['invoice']['date'] = $invoice->fecha;
            $document['invoice']['address_estab'] = $serie->address;
            $document['invoice']['require_accounting'] = (AppSettings::get("ebillingec", "require_accounting") == "true") ? "SI" : "NO";
            $document['invoice']['neto'] = $invoice->neto;
            $document['invoice']['discount'] = $discount;
            $document['invoice']['total'] = $invoice->total;
            $document['invoice']['customer']['id'] = $invoice->cifnif;
            $document['invoice']['customer']['type_id'] = $this->idFiscal[$customer->tipoidfiscal];
            $document['invoice']['customer']['bussinesName'] = $invoice->nombrecliente;
            $document['invoice']['customer']['address'] = $invoice->direccion;

            if(!$keyAccess = $this->getKeyAccess($document)){
                $this->toolBox()->i18nLog()->error('key-not-valid');
                return false;
            }

            $document['header']['accessKey'] = $keyAccess;


            $i = 0;
            foreach ($this->getTaxesRows($invoice) as $line){
                $codiva = 0;

                if($line['taxp'] == 12){
                   $codiva = 2;
                }

                $document['invoice']['lines_iva'][$i]['codIva'] = $codiva;
                $document['invoice']['lines_iva'][$i]['neto'] = self::NumberToolsGen($line['taxbase']);
                $document['invoice']['lines_iva'][$i]['totalIva'] = self::NumberToolsGen($line['taxamount']);
                $document['invoice']['lines_iva'][$i]['rateIva'] = $line['taxp'];
                $i++;
            }

                $document['invoice']['payments']['method'] = 20;
                $document['invoice']['payments']['total'] = $invoice->total;
                $document['invoice']['payments']['term'] = 0;
                $document['invoice']['payments']['unity'] = "dias";

                $document['invoice']['info']['address'] = $invoice->direccion;
                $document['invoice']['info']['email'] = ($invoice->getSubject()->email != '') ? $invoice->getSubject()->email : "-";
                $document['invoice']['info']['phone'] = ($invoice->getSubject()->telefono1 !=  "") ? $invoice->getSubject()->telefono1 : "-" ;



            $op = (new OperacionEbilling())->all([new DataBaseWhere('tipodocumento','factura'), new DataBaseWhere('iddocumento',$invoice->idfactura)]);

                if(!$op){
                    $op = new OperacionEbilling();
                }else
                    $op = $op[0];

            $op->iddocumento = $invoice->idfactura;
            $op->tipodocumento = 'factura';
            $op->nick = $this->user->nick;
            $op->claveacceso = $document['header']['accessKey'];
            $op->fechageneracion = NULL;
            $op->ambiente = $document['header']['env'];
            $op->enviado = 0;
            $op->verificado = 0;


            if(!$op->save()){
                if(!is_null($this->response)) {
                    $context_resp = json_encode(['success' => FALSE, 'msg' => "No se pudo crear la operacion correctamente"]);
                    $this->response->setContent($context_resp);
                    $this->response->setStatusCode('200');
                }
                return;
            }



            $this->api = new APIConsumer($this->api_domain, $this->api_token);
            $resp =  $this->api->createDocument(json_encode($document));

            $logEbilling = new LogEbilling();
            $logEbilling->fecha = date("Y-m-d H:i:s");
            $logEbilling->idoperacion = $op->idoperacion;
            $logEbilling->proceso = "Gen";


            if($resp->success != true){

                $logEbilling->mensaje = $resp->msg;
                $logEbilling->save();
                if(!is_null($this->response)) {
                    $context_resp = json_encode(['success' => FALSE, 'msg' => $resp->msg,'xml'=>$resp->xml]);
                    $this->response->setContent($context_resp);
                    $this->response->setStatusCode('200');
                }
                return;
            }


            $op->fechageneracion =  date('Y-m-d H:i:s');

            if(!$op->save()){
                if(!is_null($this->response)) {
                    $context_resp = json_encode(['success' => FALSE, 'msg' => "No se pudo guardar la fecha de la operacion correctamente"]);
                    $this->response->setContent($context_resp);
                    $this->response->setStatusCode('200');
                }
                return;
            }

            $logEbilling->mensaje = "Generado correctamente";
            $logEbilling->save();

            if(!is_null($this->response)){
                $context_resp = json_encode(['success' => true,'msg'=>$resp->msg,'document'=>$resp->request]);
                $this->response->setContent($context_resp);
                $this->response->setStatusCode('200');
            }
        }

        return FALSE;
    }
    public function createRetention(&$document)
    {

        $retention = new RetencionProveedor();
        $retention->loadFromCode(input("iddocument", "post", "int"));
        if($retention){

            $sequence = new SecuenciaDocumento();
            if($sequence->loadFromCode($retention->idsecuencia)){
                $serie = new Serie();
                if(!$serie->loadFromCode($sequence->codserie)){
                    $this->toolBox()->i18nLog()->error('serie-not-found');
                    return false;
                }
            }

            $document['header']['numero'] = self::getNumberSri($sequence, $retention);
            $this->createHeader($document, $serie);

            $supplier = new Proveedor();
            if($supplier->loadFromCode($retention->codproveedor)){
                $addressSupplier = $supplier->getDefaultAddress()->direccion;

                $document['retention']['date'] = $retention->fecha_ingreso;
                $document['retention']['address_estab'] = $serie->address;
                $document['retention']['require_accounting'] = (AppSettings::get("ebillingec", "require_accounting") == "true") ? "SI" : "NO";
                $document['retention']['supplier']['id'] = $supplier->cifnif;
                $document['retention']['supplier']['type_id'] = $this->idFiscal[$supplier->tipoidfiscal];
                $document['retention']['supplier']['bussinesName'] = $supplier->razonsocial;
                $document['retention']['supplier']['address'] = $addressSupplier;

                if(!$keyAccess = $this->getKeyAccess($document)){
                    $this->toolBox()->i18nLog()->error('key-not-valid');
                    return false;
                }

                $document['header']['accessKey'] = $keyAccess;

                $i = 0;
                foreach ($retention->getLines() as $line){
                    if($line->type == 'RENTA'){
                        $document['retention']['lines'][$i]['code'] = 1;
                        $concept = new RetencionRenta();
                        if(!$concept->loadFromCode($line->idalicuota)){
                            return false;
                        }
                        $document['retention']['lines'][$i]['codeRet'] = $concept->codanex;
                    }elseif($line->type == 'IVA'){
                        $document['retention']['lines'][$i]['code'] = 2;
                        $concept = new RetencionIva();
                        if(!$concept->loadFromCode($line->idalicuota)){
                            return false;
                        }
                    }

                    $invoice = new FacturaProveedor();
                    if(!$invoice->loadFromCode($retention->idfactura)){
                        ToolBox::log()->error("invoice-not-found");
                        return FALSE;
                    }

                    $serieSupplier = new SuppliersSerie();
                    if(!$serieSupplier->loadFromCode($invoice->idseriesupplier)){
                        ToolBox::log()->error("serie-supplier-not-found");
                        return FALSE;
                    }

                    $codSerieSupplier = str_replace('-', '', $serieSupplier->codserie);

                    $document['retention']['lines'][$i]['bi'] = round($line->base, self::$Decimals);
                    $document['retention']['lines'][$i]['percentage'] = $line->porcentaje;
                    $document['retention']['lines'][$i]['value'] = round($line->total, self::$Decimals);;
                    $document['retention']['lines'][$i]['codSupport'] = '01';
                    $document['retention']['lines'][$i]['numDoc'] = "{$codSerieSupplier}{$invoice->numbersupplier}";
                    $document['retention']['lines'][$i]['date_issue'] = $invoice->fecha;
                }

                $document['retention']['info']['address'] = "{$addressSupplier}";
                $document['retention']['info']['phone'] = "{$supplier->telefono1}";
                $document['retention']['info']['email'] = "{$supplier->email}";


                $op = (new OperacionEbilling())->all([new DataBaseWhere('tipodocumento','retencion'), new DataBaseWhere('iddocumento',$retention->id)]);

                if(!$op){

                    $op = new OperacionEbilling();
                }else
                    $op = $op[0];

                $op->iddocumento = $retention->id;
                $op->tipodocumento = 'retencion';
                $op->nick = $this->user->nick;
                $op->claveacceso = $document['header']['accessKey'];
                $op->fechageneracion = date('Y-m-d H:i:s');
                $op->ambiente = $document['header']['env'];
                $op->enviado = 0;

                if(!$op->save()){
                    $context_resp = json_encode(['success' => FALSE, 'msg' => "No se pudo crear la operacion correctamente"]);
                    $this->response->setContent($context_resp);
                    $this->response->setStatusCode('200');
                    return;
                }


                $this->api = new APIConsumer($this->api_domain, $this->api_token);
                $resp = $this->api->createDocument(json_encode($document));

                $logEbilling = new LogEbilling();
                $logEbilling->fecha = date("Y-m-d H:i:s");
                $logEbilling->idoperacion = $op->idoperacion;
                $logEbilling->proceso = "Gen";

                if($resp->success != true){

                    $logEbilling->mensaje = $resp->msg;
                    $logEbilling->save();

                    $context_resp = json_encode(['success' => FALSE, 'msg' => $resp->msg, 'xml' => $resp->xml]);
                    $this->response->setContent($context_resp);
                    $this->response->setStatusCode('200');
                    return;
                }

                $op->fechageneracion =  date('Y-m-d H:i:s');

                if(!$op->save()){
                    $context_resp = json_encode(['success' => FALSE, 'msg' => "No se pudo guardar la fecha de la operacion correctamente"]);
                    $this->response->setContent($context_resp);
                    $this->response->setStatusCode('200');
                    return;
                }

                $logEbilling->mensaje = "Generado correctamente";
                $logEbilling->save();

                $context_resp = json_encode(['success' => true,'msg'=>$resp->msg,'document'=>$resp->request]);
                $this->response->setContent($context_resp);
                $this->response->setStatusCode('200');

            }
        }
        return FALSE;
    }

    public function createNotaCredito(&$document)
    {

        $note = new NotaCreCliente();
        $note->loadFromCode(input("iddocument", "post", "int"));
        if($note){
            $sequence = new SecuenciaDocumento();

            if($sequence->loadFromCode($note->idsecuencia)){
                $serie = new Serie();
                if(!$serie->loadFromCode($sequence->codserie)){
                    $this->toolBox()->i18nLog()->error('serie-not-found');
                    return false;
                }
            }

            $invoice = new FacturaCliente();
            if(!$invoice->loadFromCode($note->idfactura)){
                $this->toolBox()->i18nLog()->error('invoice-not-found');
                return false;
            }

            $document['header']['numero'] = self::getNumberSri($sequence, $note);
            $this->createHeader($document, $serie);

            $customer = new Cliente();
            if($customer->loadFromCode($note->codcliente)){
                $addressCustomer = $customer->getDefaultAddress();

                $document['note']['date'] = $note->fecha;
                $document['note']['address_estab'] = $serie->address;
                $document['note']['customer']['type_id'] = $this->idFiscal[$customer->tipoidfiscal];
                $document['note']['customer']['bussinesName'] = $customer->razonsocial;
                $document['note']['customer']['id'] = $customer->cifnif;
                $document['note']['require_accounting'] = $require = (AppSettings::get("ebillingec", "require_accounting") == "true") ? 'SI' : 'NO';
                $document['note']['codSupport'] = '01';
                $document['note']['numDoc'] = "{$serie->estab}-{$serie->terminal}-".self::getNumberSri($sequence,$invoice);
                $document['note']['date_issue'] = $invoice->fecha;
                $document['note']['valueWhitoutTax'] = round($note->neto,self::$Decimals);
                $document['note']['valueWhitTax'] = round($note->total,self::$Decimals);
                $document['note']['reason'] = "-";

                if(!$keyAccess = $this->getKeyAccess($document)){
                    $this->toolBox()->i18nLog()->error('key-not-valid');
                    return false;
                }

                $document['header']['accessKey'] = $keyAccess;

                $i = 0;
                foreach ($note->getLines() as $line){
                    $document['note']['lines'][$i]['reference'] = $line->referencia;
                    $document['note']['lines'][$i]['description'] = $line->descripcion;
                    $document['note']['lines'][$i]['count'] = $line->cantidad;
                    $document['note']['lines'][$i]['pvpUnit'] = round($line->punitario,self::$Decimals);
                    $document['note']['lines'][$i]['codIva'] = $line->iva;
                    $document['note']['lines'][$i]['pvptotalWhitoutTax'] = round($line->punitario * $line->cantidad,self::$Decimals);
                    $document['note']['lines'][$i]['TotalTax'] = round(($line->ptotal * $line->iva / 100),self::$Decimals);
                    $document['note']['lines'][$i]['discount'] = '0'; // Peding ..
                    $i++;
                }

                $document['note']['info']['address'] = "{$addressCustomer->direccion}";
                $document['note']['info']['email'] = "{$customer->email}";
                $document['note']['info']['phone'] = "{$customer->telefono1}";


                $op = (new OperacionEbilling())->all([new DataBaseWhere('tipodocumento','notacredito'), new DataBaseWhere('iddocumento',$note->idnc_cli)]);

                if(!$op){

                    $op = new OperacionEbilling();
                }else
                    $op = $op[0];

                $op->iddocumento = $note->idnc_cli;
                $op->tipodocumento = 'notacredito';
                $op->nick = $this->user->nick;
                $op->claveacceso = $document['header']['accessKey'];
                $op->fechageneracion = date('Y-m-d H:i:s');
                $op->ambiente = $document['header']['env'];
                $op->enviado = 0;

                if(!$op->save()){
                    $context_resp = json_encode(['success' => FALSE, 'msg' => "No se pudo crear la operacion correctamente"]);
                    $this->response->setContent($context_resp);
                    $this->response->setStatusCode('200');
                    return;
                }

                    $this->api = new APIConsumer($this->api_domain, $this->api_token);
                    $resp = $this->api->createDocument(json_encode($document));

                    $logEbilling = new LogEbilling();
                    $logEbilling->fecha = date("Y-m-d H:i:s");
                    $logEbilling->idoperacion = $op->idoperacion;
                    $logEbilling->proceso = "Gen";

                    if($resp->success != true){

                        $logEbilling->mensaje = $resp->msg;
                        $logEbilling->save();

                        $context_resp = json_encode(['success' => FALSE, 'msg' => $resp->msg]);
                        $this->response->setContent($context_resp);
                        $this->response->setStatusCode('200');
                        return;
                    }

                    $op->fechageneracion =  date('Y-m-d H:i:s');

                    if(!$op->save()){
                        $context_resp = json_encode(['success' => FALSE, 'msg' => "No se pudo guardar la fecha de la operacion correctamente"]);
                        $this->response->setContent($context_resp);
                        $this->response->setStatusCode('200');
                        return;
                    }

                    $logEbilling->mensaje = "Generado correctamente";
                    $logEbilling->save();

                    $context_resp = json_encode(['success' => true,'msg'=>$resp->msg,'document'=>$resp->request]);
                    $this->response->setContent($context_resp);
                    $this->response->setStatusCode('200');
            }
        }
        return FALSE;
    }

    public function createNotaDebito()
    {
    }

    public function createGuiaRemision()
    {
    }

    private function createHeader(&$document, $serie)
    {
        /*Acceskey and numero are added by each method*/
        $document['header']['env'] = AppSettings::get("ebillingec", "env");
        $document['header']['bussinesName'] = $this->empresa->nombre;
        $document['header']['comercialName'] = $this->empresa->nombrecorto;
        $document['header']['ruc_company'] = $this->empresa->cifnif;
        $document['header']['type'] = $document['type'];
        $document['header']['estab'] = $serie->estab;
        $document['header']['terminal'] = $serie->terminal;
        $document['header']['address_company'] = $this->empresa->direccion;
    }

    /**
     *
     * @param BusinessDocument $model
     */
    public function getTaxesRows(&$model)
    {
        $subtotals = [];
        foreach ($model->getLines() as $line) {
            if (is_null($line->iva)) {
                continue;
            }

            $key = $line->codimpuesto . '_' . $line->iva;
            if (!isset($subtotals[$key])) {
                $subtotals[$key] = [
                    'tax' => $key,
                    'taxbase' => 0,
                    'taxp' => $line->iva,
                    'taxamount' => 0,
                    'taxsurcharge' => 0,
                ];

                $impuesto = new Impuesto();
                if (!empty($line->codimpuesto) && $impuesto->loadFromCode($line->codimpuesto)) {
                    $subtotals[$key]['tax'] = $impuesto->descripcion;
                }
            }

            $subtotals[$key]['taxbase'] += $line->pvptotal;
            $subtotals[$key]['taxamount'] += $line->pvptotal * $line->iva / 100;
        }

        /// round
        foreach ($subtotals as $key => $value) {
            $subtotals[$key]['taxbase'] = $value['taxbase'];
            $subtotals[$key]['taxamount'] = $value['taxamount'];
        }

        return $subtotals;
    }

    private function getKeyAccess(&$document)
    {

        if($document['type'] == self::INVOICE_TYPE){
            $name = "invoice";
        }elseif ($document['type'] == self::RETENTION_TYPE){
            $name = 'retention';
        }elseif ($document['type'] == self::NC_TYPE){
            $name = 'note';
        }

        $date = $this->generateDate($document[$name]['date']);
        $typeDoc = $document['type'];
        $number = $document['header']['numero'];
        $estab = $document['header']['estab'];
        $terminal = $document['header']['terminal'];
        $ruc = $document['header']['ruc_company'];
        $env = $document['header']['env'];
        $numberValidate = "123456781"; // last number is type of issue

        if(strlen($date) != 8){
            $this->toolBox()->i18nLog()->error('date-not-valid');
            return false;
        }

        if(strlen($ruc) != 13){
            $this->toolBox()->i18nLog()->error("ruc-not-valid");
            return false;
        }

        if(strlen($typeDoc) != 2){
            $this->toolBox()->i18nLog()->error('type-document-not-found');
            return false;
        }

        if(strlen($env) != 1){
            $this->toolBox()->i18nLog()->error('env-not-valid');
            return false;
        }

        if(strlen($estab) != 3 and strlen($terminal) != 3){
            $this->toolBox()->i18nLog()->error('estab-or-terminal-not-valid');
            return false;
        }

        if(strlen($number) != 9){
            $this->toolBox()->i18nLog()->error('number-not-valid');
            return false;
        }


        $key = "{$date}{$typeDoc}{$ruc}{$env}{$estab}{$terminal}{$number}{$numberValidate}";
        $code11 = $this->validateModule11($key);
        $key .= "{$code11}";
        return $key;
    }

    private function validateModule11($string)
    {

        $mode11 = 2;
        $operacion = 0;
        $modres = 0;
        for ($i = strlen($string) - 1; $i >= 0; $i--) {
            if ($mode11 == 2) {
                $operacion += ((int)$string[$i]) * 2;
                $mode11 = 3;
            } elseif ($mode11 == 3) {
                $operacion += ((int)$string[$i]) * 3;
                $mode11 = 4;
            } elseif ($mode11 == 4) {
                $operacion += ((int)$string[$i]) * 4;
                $mode11 = 5;
            } elseif ($mode11 == 5) {
                $operacion += ((int)$string[$i]) * 5;
                $mode11 = 6;
            } elseif ($mode11 == 6) {
                $operacion += ((int)$string[$i]) * 6;
                $mode11 = 7;
            } elseif ($mode11 == 7) {
                $operacion += ((int)$string[$i]) * 7;
                $mode11 = 2;
            }
        }

        $modres = $operacion % 11;
        $total = (int)(11 - $modres);

        $t = is_int($total);
        if ($total <= 9) {
            return $total;
        } else if ($total > 10) {
            return 0;
        } else {
            return 1;
        }
    }

    private function generateDate($date = null)
    {

        if(!is_null($date)){
            $date = date_create($date);

            $day = date_format($date, 'd');
            $day = (strlen($day) == 1) ? "0{$day}" : $day;

            $month = date_format($date, 'm');
            $month = (strlen($month) == 1) ? "0{$month}" : $month;

            $year = date_format($date, "Y");
        }

        return "{$day}{$month}{$year}";
    }

    public static  function NumberToolsGen($number){

        if(!is_null($number)){

            $number = NumberTools::format($number);
            $number = str_replace(" ","",$number);
            return  $number;

        }

        return false;

    }

    public static function getNumberSri(&$sequence,&$document){

        preg_match("#\w{2}(\d{6}).*#",$sequence->patron,$matches);
        $number = \str_pad($document->numero,$sequence->longnumero,'0',\STR_PAD_LEFT);
        return "{$number}";


    }

}
