<?php
/**
 * Author: info@ebizmarts.com
 * Date: 7/14/15
 * Time: 10:00 PM
 * File: Discounttype.php
 * Module: magento2-abandonedcart
 */
namespace Ebizmarts\AbandonedCart\Model\System\Config;

class Discounttype
{
    public function toOptionArray()
    {
        $options = array(
            array('value' => 1, 'label' => __('Fixed amount')),
            array('value' => 2, 'label' => __('Percentage'))
        );
        return $options;
    }

    public function options()
    {
        $options[1] = __('Fixed amount');
        $options[2] = __('Percentage');
        return $options;
    }
}