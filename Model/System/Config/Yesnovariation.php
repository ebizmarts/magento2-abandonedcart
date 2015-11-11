<?php
/**
 * Ebizmarts_Abandonedcart Magento JS component
 *
 * @category    Ebizmarts
 * @package     Ebizmarts_Abandonedcart
 * @author      Ebizmarts Team <info@ebizmarts.com>
 * @copyright   Ebizmarts (http://ebizmarts.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Ebizmarts\AbandonedCart\Model\System\Config;

class Yesnovariation
{
    /**
     * @var \Ebizmarts\AbandonedCart\Helper\Data
     */
    protected $_helper;
    /**
     * @param \Ebizmarts\AbandonedCart\Helper\Data $helper
     */
    public function __construct(
        \Ebizmarts\AbandonedCart\Helper\Data $helper
    )
    {
        $this->_helper = $helper;
    }
    public function toOptionArray()
    {
//        $code = Mage::getSingleton('adminhtml/config_data')->getStore();
//        $storeId = Mage::getModel('core/store')->load($code)->getId();
        $storeId = null;
        $hasCoupon = $this->_helper->getConfig(\Ebizmarts\AbandonedCart\Model\Config::SEND_COUPON);
        if ($hasCoupon) {
            $active = -$this->_helper->getConfig(\Ebizmarts\AbandonedCart\Model\Config::MAXTIMES);
        } else {
            $active = $this->_helper->getConfig(\Ebizmarts\AbandonedCart\Model\Config::MAXTIMES);
        }
        $options = array(
            array('value' => 0, 'label' => __('No')),
            array('value' => ($active+($hasCoupon ? -1 :1)), 'label' => __('Yes'))
        );
        return $options;
    }

}