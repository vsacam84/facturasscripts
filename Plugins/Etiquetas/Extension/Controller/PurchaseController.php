<?php
/**
 * Copyright (C) 2020 Carlos Garcia Gomez <carlos@facturascripts.com>
 */
namespace FacturaScripts\Plugins\Etiquetas\Extension\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Dinamic\Model\Variante;

/**
 * Description of PurchaseController
 *
 * @author Carlos Garcia Gomez <carlos@facturascripts.com>
 */
class PurchaseController
{

    public function createViews()
    {
        return function() {
            $viewName = 'Etiquetas';
            $this->addHtmlView($viewName, $viewName, 'AlbaranProveedor', 'tags', 'fas fa-barcode');
        };
    }

    public function getAvaliableTags()
    {
        return function() {
            $tags = [];
            $mainViewName = $this->getMainViewName();
            foreach ($this->views[$mainViewName]->model->getLines() as $key => $line) {
                $variant = new Variante();
                $where = [new DataBaseWhere('referencia', $line->referencia)];
                if (empty($line->referencia) || !$variant->loadFromCode('', $where)) {
                    continue;
                }

                $tags[$key] = ['reference' => $variant->referencia, 'url' => $variant->url(), 'quantity' => (int) $line->cantidad];
            }

            return $tags;
        };
    }
}
