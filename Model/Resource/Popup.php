<?php
/**
 * Author: info@ebizmarts.com
 * Date: 7/22/15
 * Time: 5:37 PM
 * File: Popup.php
 * Module: magento2-abandonedcart
 */

namespace Ebizmarts\AbandonedCart\Model\Resource;

class Popup extends \Magento\Framework\Model\Resource\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('abandonedcart_popup', 'id');
    }

}