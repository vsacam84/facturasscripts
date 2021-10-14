<?php
/**
 * Copyright (C) 2020 Carlos Garcia Gomez <carlos@facturascripts.com>
 */
namespace FacturaScripts\Plugins\Etiquetas;

require_once __DIR__ . '/vendor/autoload.php';

use FacturaScripts\Core\Base\InitClass;

/**
 * Description of Init
 *
 * @author Carlos Garcia Gomez <carlos@facturascripts.com>
 */
class Init extends InitClass
{

    public function init()
    {
        $this->loadExtension(new Extension\Controller\EditAlbaranProveedor());
        $this->loadExtension(new Extension\Controller\EditFacturaProveedor());
    }

    public function update()
    {
        ;
    }
}
