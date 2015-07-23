<?php
/**
 * Author: info@ebizmarts.com
 * Date: 7/22/15
 * Time: 5:48 PM
 * File: Collection.php
 * Module: magento2-abandonedcart
 */
namespace Ebizmarts\AbandonedCart\Model\Resource\Popup;

class Collection extends \Magento\Framework\Model\Resource\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Ebizmarts\AbandonedCart\Model\Popup', 'Ebizmarts\AbandonedCart\Model\Resource\Popup');
    }

}