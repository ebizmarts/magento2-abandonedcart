<?php
/**
 * Author: info@ebizmarts.com
 * Date: 7/31/15
 * Time: 2:31 PM
 * File: AccountManagement.php
 * Module: magento2-abandonedcart
 */
namespace Ebizmarts\AbandonedCart\Model\Plugin;

class AccountManagement
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $_logger;

    /**
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Psr\Log\LoggerInterface $logger
    )
    {
        $this->_objectManager = $objectManager;
        $this->_logger = $logger;
    }
    public function aroundIsEmailAvailable(\Magento\Customer\Model\AccountManagement $accountManagement,\Closure $proceed,$customerEmail,$websiteId)
    {
        $ret = $proceed($customerEmail,$websiteId);
        $session = $this->_getSession();
        if($session)
        {
            $quoteId = $session->getQuoteId();
            if($quoteId) {
                $quote = $this->_objectManager->get('\Magento\Quote\Model\Quote')->load($quoteId);
                $quote->setCustomerEmail($customerEmail);
                $quote->setUpdatedAt(date('Y-m-d H:i:s'));
                $quote->save();
            }
        }
        return $ret;
    }
    protected function _getSession()
    {
        return $this->_objectManager->get('Magento\Checkout\Model\Session');
    }
}