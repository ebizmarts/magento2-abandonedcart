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
    public function aroundIsEmailAvailable(\Magento\Customer\Model\AccountManagement $accountManagement,\Closure $proceed,$customerEmail,$websiteId=null)
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