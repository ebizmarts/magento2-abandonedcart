<?php
/**
 * Author: info@ebizmarts.com
 * Date: 7/27/15
 * Time: 3:54 PM
 * File: Loadquote.php
 * Module: magento2-abandonedcart
 */
namespace Ebizmarts\AbandonedCart\Controller\Abandoned;

class Loadquote extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;
    /**
     * @var \Ebizmarts\AbandonedCart\Helper\Data
     */
    protected $_helper;

    /**
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param \Ebizmarts\AbandonedCart\Helper\Data $helper
     */
    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Ebizmarts\AbandonedCart\Helper\Data $helper

    )
    {
        $this->_objectManager = $objectManager;
        $this->_helper = $helper;
    }
    public function execute()
    {
        $quoteId = (int) $this->getRequest()->getParam('id', false);
        if($quoteId) {
            $quote = $this->_objectManager->create('\Magento\Quote\Model\Quote')->load($quoteId);
            $storeId = $quote->getStoreId();
            $url = $this->_helper->getConfig(\Ebizmarts\AbandonedCart\Model\Config::PAGE,$storeId);
            $token = (int) $this->getRequest()->getParam('token', false);
            if($token != $quote->getEbizmartsAbandonedcartToken())
            {
                $this->_redirect($url);
            }
            else {
                $coupon = $this->getRequest()->getParam('id', false);
                if($coupon)
                {
                    $quote->setCouponCode($coupon);
                }
                $quote->setEbizmartsAbandonedcartFlag(1);
                $quote->save();
                if($this->_helper->getConfig(\Ebizmarts\AbandonedCart\Model\Config::AUTOLOGIN,$storeId))
                {
                    $customer = $this->_objectManager->create('\Magento\Customer\Model\Customer')->load($quote->getCustomerId());
                    if($customer && $customer->getId() == $quote->getCustomerId())
                    {
                        $customerSession = $this->_objectManager->get('Magento\Customer\Model\Session');
                        if(!$customerSession->isLoggedIn())
                        {
                            $customerSession->setCustomerAsLoggedIn($customer);
                        }
                        $this->_redirect('customer/account');
                    }
                }
            }

        }

    }
}