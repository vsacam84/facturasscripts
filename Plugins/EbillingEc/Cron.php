<?php


namespace FacturaScripts\Plugins\EbillingEc;
use FacturaScripts\Core\App\App;
use FacturaScripts\Core\Base\CronClass;
use FacturaScripts\Core\Base\DataBase;
use FacturaScripts\Dinamic\Model\Empresa;
use FacturaScripts\Dinamic\Model\FacturaCliente;
use FacturaScripts\Dinamic\Controller\DocumentController;
use FacturaScripts\Dinamic\Model\OperacionEbilling;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Dinamic\Model\User;
use FacturaScripts\Core\App\AppSettings;


class Cron extends  CronClass
{
    const CHECK_EBILLING_DOCUMENTS_JOB = "check-ebilling-documents";

    public $empresa;
    public $user;

    public function run()
    {
        if ($this->isTimeForJob(self::CHECK_EBILLING_DOCUMENTS_JOB, "2 seconds")){

            if(AppSettings::get('ebillingec','cron_code_nick') == '' and AppSettings::get('ebillingec','cron_code_empresa')){
                echo "El nick o el codigo de empresa estan vacios";
                return;
            }

            $since = (AppSettings::get('ebillingec','cron_date_since') != '') ? date('Y-m-d',strtotime(AppSettings::get('ebillingec','cron_date_since'))) : date("Y-m-d");
            $until = (AppSettings::get('ebillingec','cron_date_until') != '') ? date('Y-m-d',strtotime(AppSettings::get('ebillingec','cron_date_until'))) : date("Y-m-d");
            $rege = (AppSettings::get('ebillingec','cron_regen_docs'));
            $sendemail = AppSettings::get('ebillingec','cron_email_sents');


            $this->empresa = (new Empresa())->get(AppSettings::get('ebillingec','cron_code_empresa'));
            $this->user = (new User())->get(AppSettings::get('ebillingec','cron_code_nick'));
            $db = new DataBase();

            $documentOP = new DocumentController('DocumentController');
            $documentOP->setValues();


                        // Check facturascli whitout operacionebilling record.
                        $sql = "select * from facturascli WHERE codserie in (select codserie from series where ebilling = true) and idfactura 
                            not in(select iddocumento from operacionesebilling) and fecha BETWEEN '{$since}' and '{$until}'";


                        foreach ($db->select($sql) as $item){
                            $invoice = (new FacturaCliente())->get($item['idfactura']);
                            if($invoice->idfactura){

                                $document = NULL;
                                $document['company'] = $this->empresa;
                                $document['user'] = $this->user;
                                $document['type'] = DocumentController::INVOICE_TYPE;
                                $document['iddocument'] = $invoice->idfactura;
                                $documentOP->createInvoice($document);


                                // check if was created operacionebilling record and was generated
                                $op = (new OperacionEbilling())->loadFromCode('',
                                    [new DataBaseWhere('iddocumento', $invoice->idfactura),
                                        new DataBaseWhere('tipodocumento','factura'),
                                        new DataBaseWhere('fechageneracion',null,'!=')]);

                                if($op){
                                    echo "El documento {$invoice->idfactura} fue generado correctamente \n";
                                }else{
                                    echo "No se pudo generar el documento {$invoice->idfactura} \n";
                                }
                            }
                        }

                        if($rege){
                            // Check facturascli with operacionebilling record and not was regenerated.
                            $sql = "SELECT o.iddocumento FROM operacionesebilling o, facturascli f where o.tipodocumento = 'factura' and o.fechaautorizacion is null and o.fechafirma is not null
                            and f.idfactura = o.iddocumento and f.fecha between '{$since}' and '{$until}'";
                        }else{
                            // Check facturascli with operacionebilling record and not was generated.
                            $sql = "SELECT o.iddocumento FROM operacionesebilling o, facturascli f where o.tipodocumento = 'factura' and o.fechageneracion is null 
                            and f.idfactura = o.iddocumento and f.fecha between '{$since}' and '{$until}'";
                        }

                        foreach ($db->select($sql) as $item){
                            $invoice = (new FacturaCliente())->get($item['iddocumento']);
                            if($invoice->idfactura){

                                $documentWhitOp = NULL;
                                $documentWhitOp['company'] = $this->empresa;
                                $documentWhitOp['user'] = $this->user;
                                $documentWhitOp['type'] = DocumentController::INVOICE_TYPE;
                                $documentWhitOp['iddocument'] = $invoice->idfactura;
                                $documentOP->createInvoice($documentWhitOp);

                                // check if was created operacionebilling record and was generated
                                $op = (new OperacionEbilling())->loadFromCode('',
                                    [new DataBaseWhere('iddocumento', $invoice->idfactura),
                                        new DataBaseWhere('tipodocumento','factura'),
                                        new DataBaseWhere('fechageneracion',null,'!=')]);

                                if($op){
                                    echo "El documento {$invoice->idfactura} fue generado correctamente \n";
                                }else{
                                    echo "No se pudo generar el documento {$invoice->idfactura} \n";
                                }

                            }
                        }


            //Check documents without sign

            $sql = "SELECT * FROM operacionesebilling where  fechafirma is null and fechageneracion between '{$since} 00:00:00' and '{$until} 23:59:59'";
            foreach ($db->select($sql) as $item){
                $document = null;
                $document = (new OperacionEbilling())->get($item['idoperacion']);
                $documentOP->signDocument($document);

            }

            //Check documents without Auth

            $sql = "SELECT * FROM operacionesebilling where  fechaautorizacion is null and fechafirma is not null and fechageneracion between '{$since} 00:00:00' and '{$until} 23:59:59'";
            foreach ($db->select($sql) as $item){
                $document = null;
                $document = (new OperacionEbilling())->get($item['idoperacion']);
                $documentOP->authDocument($document);

            }


            //Check documents whitout Email
            if($sendemail){
                $sql = "SELECT * FROM operacionesebilling where fechaautorizacion between '{$since} 00:00:00' and '{$until} 23:59:59' and enviado = 0";
                foreach ($db->select($sql) as $item){
                    $document = null;
                    $document = (new OperacionEbilling())->get($item['idoperacion']);
                        if($documentOP->sendEmail($document)){
                            $document->enviado = 1;
                            $document->save();
                        }
                }
            }

        }
    }
}