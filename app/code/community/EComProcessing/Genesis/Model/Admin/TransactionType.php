<?php

class EComProcessing_Genesis_Model_Admin_TransactionType
{
	public function toOptionArray()
	{
		return array(
			EComProcessing_Genesis_Model_Standard::GENESIS_TRANSACTION_AUTHORIZE     => Mage::helper('emerchantpay')->__('Authorize'),
			EComProcessing_Genesis_Model_Standard::GENESIS_TRANSACTION_AUTHORIZE3D   => Mage::helper('emerchantpay')->__('Authorize with 3D-Secure'),
			EComProcessing_Genesis_Model_Standard::GENESIS_TRANSACTION_SALE          => Mage::helper('emerchantpay')->__('Sale'),
			EComProcessing_Genesis_Model_Standard::GENESIS_TRANSACTION_SALE3D        => Mage::helper('emerchantpay')->__('Sale with 3D-Secure'),
		);
	}
}