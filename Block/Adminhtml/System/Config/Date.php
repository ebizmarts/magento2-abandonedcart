<?php
/**
 * Author: info@ebizmarts.com
 * Date: 7/14/15
 * Time: 2:29 PM
 * File: Date.php
 * Module: magento2-abandonedcart
 */
namespace Ebizmarts\AbandonedCart\Block\Adminhtml\System\Config;

//use Magento\Framework\Data\Form\Element\Date;

class Date extends \Magento\Config\Block\System\Config\Form\Field
{
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $element->setDateFormat(\Magento\Framework\Stdlib\DateTime::DATE_INTERNAL_FORMAT);
        $element->setTimeFormat(null);
        return parent::render($element);
    }

}