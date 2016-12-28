<?php
/*
 * Copyright (C) 2016 E-ComProcessing™
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * @author      E-ComProcessing
 * @copyright   2016 E-ComProcessing™
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU General Public License, version 2 (GPL-2.0)
 */

/**
 * Class EComProcessing_Genesis_Block_Info_Direct
 *
 * Info block for Direct method
 */
class EComProcessing_Genesis_Block_Info_Direct extends Mage_Payment_Block_Info
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('ecomprocessing/info/direct.phtml');
    }

    public function getMethodCode()
    {
        return $this->getInfo()->getMethodInstance()->getCode();
    }
}