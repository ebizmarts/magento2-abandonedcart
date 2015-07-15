<?php
/**
 * Author: info@ebizmarts.com
 * Date: 7/14/15
 * Time: 9:50 PM
 * File: Automatic.php
 * Module: magento2-abandonedcart
 */
namespace Ebizmarts\AbandonedCart\Model\System\Config;

class Automatic
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        $options = array(
            array('value' => 1, 'label' => __('Specific')),
            array('value' => 2, 'label' => __('Automatic'))
        );
        return $options;
    }
}