<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2021 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace FacturaScripts\Core\App;

use DateTime;
use FacturaScripts\Core\Base\ToolBox;

/**
 * App description
 *
 * @author Carlos García Gómez <carlos@facturascripts.com>
 */
final class AppCron extends App
{

    /**
     * Returns the data into the standard output.
     */
    public function render()
    {
        $this->response->headers->set('Content-Type', 'text/plain');

        $title = <<<END
 88888888b                     dP                              .d88888b                    oo            dP            
 88                            88                              88.    "'                                 88            
a88aaaa    .d8888b. .d8888b. d8888P dP    dP 88d888b. .d8888b. `Y88888b. .d8888b. 88d888b. dP 88d888b. d8888P .d8888b. 
 88        88'  `88 88'  `""   88   88    88 88'  `88 88'  `88       `8b 88'  `"" 88'  `88 88 88'  `88   88   Y8ooooo. 
 88        88.  .88 88.  ...   88   88.  .88 88       88.  .88 d8'   .8P 88.  ... 88       88 88.  .88   88         88 
 dP        `88888P8 `88888P'   dP   `88888P' dP       `88888P8  Y88888P  `88888P' dP       dP 88Y888P'   dP   `88888P' 
                                                                                              88                       
                                                                                              dP                       
END;

        $content = $this->response->getContent() . $title;
        foreach (ToolBox::log()::read('', ['critical', 'error', 'info', 'notice', 'warning']) as $log) {
            $content .= "\n" . $log["message"];
        }

        $this->response->setContent($content . "\n");
        parent::render();
    }

    /**
     * Runs cron.
     *
     * @return bool
     */
    public function run(): bool
    {
        if (false === parent::run()) {
            return false;
        }

        $startTime = new DateTime();
        ToolBox::i18nLog()->notice('starting-cron');

        $this->runPlugins();

        $endTime = new DateTime();
        $executionTime = $startTime->diff($endTime);
        ToolBox::i18nLog()->notice('finished-cron', ['%timeNeeded%' => $executionTime->format("%H:%I:%S")]);
        return true;
    }

    /**
     * @param int $status
     * @param string $message
     */
    protected function die(int $status, string $message = '')
    {
        $content = ToolBox::i18n()->trans($message);
        $this->response->setContent($content);
        $this->response->setStatusCode($status);
    }

    /**
     * Runs cron from enabled plugins.
     */
    private function runPlugins()
    {
        foreach ($this->pluginManager->enabledPlugins() as $pluginName) {
            $cronClass = '\\FacturaScripts\\Plugins\\' . $pluginName . '\\Cron';
            if (class_exists($cronClass)) {
                ToolBox::i18nLog()->notice('running-plugin-cron', ['%pluginName%' => $pluginName]);
                $cron = new $cronClass($pluginName);
                $cron->run();
            }
        }
    }
}
