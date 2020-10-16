E-Comprocessing Gateway Module for Magento CE
=============================

This is a Payment Module for Magento Community Edition, that gives you the ability to process payments through E-Comprocessing's Payment Gateway - Genesis.

Requirements
------------

* Magento Community Edition > 1.7 (Tested up to: __1.9.3.1__)
* [GenesisPHP v1.8.3](https://github.com/GenesisGateway/genesis_php/releases/tag/1.8.3) - (Integrated in Module)
* PCI-certified server in order to use ```E-Comprocessing Direct```

*Note:* This module has been tested only with Magento __Community Edition__, it may not work
as intended with Magento __Enterprise Edition__

GenesisPHP Requirements
------------

* PHP version 5.5.9 or newer
* PHP Extensions:
    * [BCMath](https://php.net/bcmath)
    * [CURL](https://php.net/curl) (required, only if you use the curl network interface)
    * [Filter](https://php.net/filter)
    * [Hash](https://php.net/hash)
    * [XMLReader](https://php.net/xmlreader)
    * [XMLWriter](https://php.net/xmlwriter)

Installation (via Modman)
------------

* Install [ModMan]
* Navigate to the root of your Magento installation
* run ```modman init```
* and clone this repo ```modman clone https://github.com/E-Comprocessing/magento-ce-ecp-plugin```
* Login inside the Admin Panel and go to ```System``` -> ```Configuration``` -> ```Payment Methods```
* Check ```Enable```, set the correct credentials, select your prefered payment method and click ```Save config```

Installation (manual)
------------

* Copy the files to the root folder of your Magento installation
* Login inside the Admin Panel and go to ```System``` -> ```Configuration``` -> ```Payment Methods```
* If one of the Payment Methods ```E-Comprocessing Direct``` or ```E-Comprocessing Checkout``` is not yet available, 
  go to  ```System``` -> ```Cache Management``` and clear Magento Cache by clicking on ```Flush Magento Cache```
* Check ```Enable```, set the correct credentials, select your prefered payment method and click ```Save config```

Configure Magento over secured HTTPS Connection
---------------------
This configuration is needed in order to use the ```E-Comprocessing Direct``` Payment Method.

Steps:
* Ensure you have installed a valid __SSL Certificate__ on your __Web Server__ & you have configured your __Virtual Host__ correctly.
* Login to Magento Admin Panel
* Navigate to ```System``` -> ```Configuration``` -> ```General``` -> ```Web```
* Expand the __Secure__ panel and set ```Use Secure URLs in Frontend``` and ```Use Secure URLs in Admin``` to Yes
* Set your Secure ```Base URL``` and click ```Save Config```
* It is recommended to add a __Rewrite Rule__ from ```http``` to ```https``` or to configure a __Permanent Redirect__ to ```https``` in your virtual host

Supported Transactions
---------------------
* ```E-Comprocessing Direct``` Payment Method
	* __Authorize__
	* __Authorize (3D-Secure)__
	* __InitRecurringSale__
	* __InitRecurringSale (3D-Secure)__
	* __RecurringSale__
	* __Sale__
	* __Sale (3D-Secure)__

* ```E-Comprocessing Checkout``` Payment Method
    * __ABN iDEAL__
    * __Alipay__
    * __Authorize__
    * __Authorize (3D-Secure)__
    * __CashU__
    * __Citadel Payin__
    * __eZeeWallet__
    * __iDebit Payin__
    * __INPay__
    * __InstaDebit Payin__
    * __InitRecurringSale__
	* __InitRecurringSale (3D-Secure)__
    * __Neteller__
    * __P24__
    * __PayPal Express__
    * __PaySafeCard__
    * __PaySec__
    * __PayByVoucher (Sale)__
    * __PayByVoucher (oBeP)__
    * __POLi__
    * __PPRO__
    	* __eps__
    	* __GiroPay__
    	* __Mr.Cash__
    	* __MyBank__
    	* __Przelewy24__
    	* __Qiwi__
    	* __SafetyPay__
    	* __TeleIngreso__
    	* __TrustPay__
    * __RecurringSale__
    * __Sale__
    * __Sale (3D-Secure)__
    * __SDD Sale__
    * __SOFORT__
    * __Trustly Sale__
    * __WebMoney__
    * __WeChat__
    
_Note_: If you have trouble with your credentials or terminal configuration, get in touch with our [support] team

You're now ready to process payments through our gateway.

[ModMan]: https://github.com/colinmollenhour/modman
[support]: mailto:Tech-Support@e-comprocessing.net
