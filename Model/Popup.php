<?php
/**
 * Author: info@ebizmarts.com
 * Date: 7/22/15
 * Time: 5:30 PM
 * File: Popup.php
 * Module: magento2-abandonedcart
 */

namespace Ebizmarts\AbandonedCart\Model;

class Popup extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Ebizmarts\AbandonedCart\Model\Resource\Popup');
    }

}