<?php
/**
 * Author: info@ebizmarts.com
 * Date: 7/14/15
 * Time: 4:27 PM
 * File: Unit.php
 * Module: magento2-abandonedcart
 */
namespace Ebizmarts\AbandonedCart\Model\System\Config;

class Unit
{
    public function toOptionArray()
    {
        $options = array(
            array('value' => \Ebizmarts\AbandonedCart\Model\Config::IN_DAYS, 'label' => __('Days')),
            array('value' => \Ebizmarts\AbandonedCart\Model\Config::IN_HOURS, 'label' =>__('Hours'))
        );
        return $options;
    }
}