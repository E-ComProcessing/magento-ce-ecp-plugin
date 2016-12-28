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
 * Class EComProcessing_Genesis_Block_Redirect_Direct
 *
 * Redirect Block for Direct method
 */
class EComProcessing_Genesis_Block_Redirect_Direct extends Mage_Core_Block_Template
{
    /** @var String */
    protected $_uniqueId;
    /** @var EComProcessing_Genesis_Helper_Data $helper */
    protected $_helper;

    protected function _construct()
    {
        parent::_construct();

        $this->setHelper();

        $this->setUniqueId();

        $this->setTemplate('ecomprocessing/redirect/direct.phtml');
    }

    /**
     * Get the button id
     *
     * @return string
     */
    public function getButtonId()
    {
        return sprintf('redirect_to_dest_%s', $this->_uniqueId);
    }

    /**
     * Generate HTML form
     *
     * @return string
     */
    public function generateForm()
    {
        $form = new Varien_Data_Form();

        $form
            ->setAction(
                $this->_helper->getCheckoutSession()->getEComProcessingDirectRedirectUrl()
            )
            ->setId('ecomprocessing_redirect_notification')
            ->setName('ecomprocessing_redirect_notification')
            ->setMethod('GET')
            ->setUseContainer(true);

        $submitButton = new Varien_Data_Form_Element_Submit(
            array(
                'value' => $this->__('Click here, if you are not redirected within 10 seconds...'),
            )
        );

        $submitButton->setId(
            $this->getButtonId()
        );

        $form->addElement($submitButton);

        return $form->toHtml();
    }

    /**
     * Set Helper
     */
    protected function setHelper()
    {
        $this->_helper = Mage::helper('ecomprocessing');
    }

    /**
     * Set Unique Id
     */
    protected function setUniqueId()
    {
        $this->_uniqueId = Mage::helper('core')->uniqHash();
    }
}