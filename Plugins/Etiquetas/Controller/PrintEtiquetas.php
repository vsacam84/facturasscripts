<?php
/**
 * Copyright (C) 2020 Carlos Garcia Gomez <carlos@facturascripts.com>
 */
namespace FacturaScripts\Plugins\Etiquetas\Controller;

use Exception;
use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Dinamic\Model\AlbaranProveedor;
use FacturaScripts\Dinamic\Model\FacturaProveedor;
use FacturaScripts\Dinamic\Model\Variante;
use Picqer\Barcode\BarcodeGeneratorJPG;

/**
 * Description of PrintEtiquetas
 *
 * @author Carlos Garcia Gomez <carlos@facturascripts.com>
 */
class PrintEtiquetas extends Controller
{

    /**
     *
     * @var AlbaranProveedor|FacturaProveedor
     */
    protected $doc;

    /**
     * 
     * @return array
     */
    public function generateTags(): array
    {
        $tags = [];

        /// add empty tags
        $initrow = (int) $this->request->request->get('initrow');
        $initcol = (int) $this->request->request->get('initcol');
        if ($initrow > 1 || $initcol > 1) {
            $total = 4 * ($initrow - 1) + $initcol;
            for ($num = 1; $num < $total; $num++) {
                $tags[] = [
                    'barcode' => '',
                    'barcodeimg' => '',
                    'description' => '',
                    'price' => '',
                    'reference' => ''
                ];
            }
        }

        $printBarcodes = (bool) $this->request->request->get('printbarcodes', '0');
        $printPrices = (bool) $this->request->request->get('printprices', '0');
        $printDesc = (bool) $this->request->request->get('printdesc', '0');
        foreach ($this->getDoc()->getLines() as $key => $line) {
            $variant = new Variante();
            $where = [new DataBaseWhere('referencia', $line->referencia)];
            if (empty($line->referencia) || !$variant->loadFromCode('', $where)) {
                continue;
            }

            $max = $this->request->request->get('quantity' . $key, $line->cantidad);
            for ($num = 1; $num <= $max; $num++) {
                $tags[] = [
                    'barcode' => $printBarcodes ? $variant->codbarras : '',
                    'barcodeimg' => $this->getBarcodeImg($variant->codbarras),
                    'description' => $printDesc ? $this->getDescriptionString($variant->getProducto()->descripcion, 60) : '',
                    'price' => $printPrices ? $this->getPriceString($variant) : 0,
                    'reference' => $variant->referencia
                ];
            }
        }

        return $tags;
    }

    /**
     * 
     * @return AlbaranProveedor|FacturaProveedor
     */
    public function getDoc()
    {
        if (!isset($this->doc)) {
            $model = '\\FacturaScripts\\Dinamic\\Model\\' . $this->request->request->get('model', 'AlbaranProveedor');
            $this->doc = new $model();
            $this->doc->loadFromCode($this->request->request->get('code'));
        }

        return $this->doc;
    }

    /**
     * 
     * @return array
     */
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'purchases';
        $pageData['title'] = 'tags';
        $pageData['icon'] = 'fas fa-print';
        $pageData['showonmenu'] = false;
        return $pageData;
    }

    /**
     * 
     * @param string $barcode
     *
     * @return string
     */
    protected function getBarcodeImg($barcode)
    {
        if (empty($barcode)) {
            return '';
        }

        $folderPath = \implode(DIRECTORY_SEPARATOR, [FS_FOLDER, 'MyFiles', 'Public', 'Barcode']);
        if (false === \file_exists($folderPath) && false === \mkdir($folderPath, 0777, true)) {
            return '';
        }

        $generator = new BarcodeGeneratorJPG();
        $filePath = $folderPath . DIRECTORY_SEPARATOR . \urlencode($barcode) . '.jpg';
        $fileUrl = \implode(DIRECTORY_SEPARATOR, ['MyFiles', 'Public', 'Barcode', \urlencode($barcode) . '.jpg']);
        if (\file_exists($filePath)) {
            return $fileUrl;
        }

        try {
            \file_put_contents($filePath, $generator->getBarcode($barcode, BarcodeGeneratorJPG::TYPE_CODE_128, 1, 20));
        } catch (Exception $exc) {
            return '';
        }

        return $fileUrl;
    }

    /**
     * 
     * @param string $text
     * @param int    $len
     *
     * @return string
     */
    protected function getDescriptionString(string $text, int $len): string
    {
        if (\mb_strlen($text) <= $len) {
            return $text;
        }

        return \mb_substr($text, 0, $len);
    }

    /**
     * 
     * @param Variante $variant
     *
     * @return string
     */
    protected function getPriceString($variant): string
    {
        return $this->toolBox()->coins()->format($variant->priceWithTax());
    }
}
