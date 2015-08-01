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
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_resultPageFactory;
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $_logger;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param \Ebizmarts\AbandonedCart\Helper\Data $helper
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Ebizmarts\AbandonedCart\Helper\Data $helper,
        \Psr\Log\LoggerInterface $logger
    )
    {
        parent::__construct($context);
        $this->_objectManager = $objectManager;
        $this->_helper = $helper;
        $this->_resultPageFactory = $resultPageFactory;
        $this->_logger = $logger;
    }
    public function execute()
    {
        $this->_logger->info(__METHOD__);
        $quoteId = (int) $this->getRequest()->getParam('id', false);
        $this->_logger->info("quoteid $quoteId");
        if($quoteId) {
            $quote = $this->_objectManager->create('\Magento\Quote\Model\Quote')->load($quoteId);
            $storeId = $quote->getStoreId();
            $url = $this->_helper->getConfig(\Ebizmarts\AbandonedCart\Model\Config::PAGE,$storeId);
            $this->_logger->info("url $url");
            $token = (int) $this->getRequest()->getParam('token', false);
            if(!$token || $token != $quote->getEbizmartsAbandonedcartToken())
            {
                $this->messageManager->addNotice("Invalid token");
                $this->_redirect($url);
            }
            else {
                $coupon = $this->getRequest()->getParam('coupon', false);
                if($coupon)
                {
                    $quote->setCouponCode($coupon);
                }
                $quote->setEbizmartsAbandonedcartFlag(1);
                $quote->save();
                if(!$quote->getCustomerId())
                {
                    $this->_getCheckoutSession()->setQuoteId($quote->getId());
                }
                if($this->_helper->getConfig(\Ebizmarts\AbandonedCart\Model\Config::AUTOLOGIN,$storeId))
                {
                    if($quote->getCustomerId())
                    {
                        $customerSession = $this->_getCustomerSession();
                        if(!$customerSession->isLoggedIn())
                        {
                            $customerSession->loginById($quote->getCustomerId());

                        }
                        $this->_redirect('customer/account');
                    }
                }
                $this->_redirect($url);
            }

        }

    }
    protected function _getCustomerSession()
    {
        return $this->_objectManager->get('Magento\Customer\Model\Session');
    }
    protected function _getCheckoutSession()
    {
        return $this->_objectManager->get('Magento\Checkout\Model\Session');
    }
}