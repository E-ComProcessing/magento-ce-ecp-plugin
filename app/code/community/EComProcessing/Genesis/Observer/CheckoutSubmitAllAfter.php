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
 * EComProcessing Recurring Checkout Observer
 * Sets the RedirectUrl for the PaymentGateway (Checkout & Direct Payment Method)
 *
 * Class EComProcessing_Genesis_Observer_CheckoutSubmitAllAfter
 */
class EComProcessing_Genesis_Observer_CheckoutSubmitAllAfter
{
    /**
     * Observer Event Handler
     * @param Varien_Event_Observer $observer
     * @return $this
     */
    public function handleAction($observer)
    {
        $event = $observer->getEvent();
        $recurringProfiles = $event->getRecurringProfiles();

        if (is_array($recurringProfiles) && !empty($recurringProfiles)) {
            $checkoutSession = Mage::helper('ecomprocessing')->getCheckoutSession();
            $redirectUrl = $checkoutSession->getEcomProcessingCheckoutRedirectUrl();

            if ($redirectUrl) {
                $checkoutSession->setRedirectUrl(
                    $redirectUrl
                );
                $checkoutSession->setEcomProcessingCheckoutRedirectUrl(null);
            }
        }
        return $this;
    }
    
}