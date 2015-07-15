<?php
/**
 * Author: info@ebizmarts.com
 * Date: 7/14/15
 * Time: 12:37 PM
 * File: Data.php
 * Module: magento2-abandonedcart
 */
namespace Ebizmarts\AbandonedCart\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    public function getConfig($label)
    {
        return $this->scopeConfig->getValue($label);
    }
}