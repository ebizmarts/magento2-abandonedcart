<?php
/**
 * Author: info@ebizmarts.com
 * Date: 7/14/15
 * Time: 3:19 PM
 * File: Maxemails.php
 * Module: magento2-abandonedcart
 */
namespace Ebizmarts\AbandonedCart\Model\System\Config;

class Maxemails
{
    public function toOptionArray()
    {
        $options = array();
        for ($i = 0; $i < \Ebizmarts\AbandonedCart\Model\Config::MAXTIMES_NUM; $i++) {
            $options[] = array('value' => $i, 'label' => $i + 1);
        }
        return $options;
    }
}