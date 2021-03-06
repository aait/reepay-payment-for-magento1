<?php
/**
 * Reepay payment extension for Magento
 *
 * @author      Radarsofthouse Team <info@radarsofthouse.dk>
 * @category    Radarsofthouse
 * @package     Radarsofthouse_Reepay
 * @copyright   Radarsofthouse (https://www.radarsofthouse.dk/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 */
class Radarsofthouse_Reepay_Model_System_Config_Source_Dropdown_Allowwedpayment
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'card', 'label' => __('All available debit / credit cards')),
            array('value' => 'dankort', 'label' => __('Dankort')),
            array('value' => 'visa', 'label' => __('VISA')),
            array('value' => 'visa_dk', 'label' => __('VISA/Dankort')),
            array('value' => 'visa_elec', 'label' => __('VISA Electron')),
            array('value' => 'mc', 'label' => __('MasterCard')),
            array('value' => 'amex', 'label' => __('American Express')),
            array('value' => 'mobilepay', 'label' => __('MobilePay')),
            array('value' => 'viabill', 'label' => __('ViaBill')),
            array('value' => 'klarna_pay_later', 'label' => __('Klarna Pay Later')),
            array('value' => 'klarna_pay_now', 'label' => __('Klarna Pay Now')),
            array('value' => 'diners', 'label' => __('Diners Club')),
            array('value' => 'maestro', 'label' => __('Maestro')),
            array('value' => 'laser', 'label' => __('Laser')),
            array('value' => 'discover', 'label' => __('Discover')),
            array('value' => 'jcb', 'label' => __('JCB')),
            array('value' => 'china_union_pay', 'label' => __('China Union Pay')),
            array('value' => 'ffk', 'label' => __('Forbrugsforeningen')),
            array('value' => 'applepay', 'label' => __('Apple Pay')),
            array('value' => 'paypal', 'label' => __('PayPal'))
        );
    }
}
