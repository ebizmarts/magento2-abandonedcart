<?php
/**
 * Author: info@ebizmarts.com
 * Date: 7/14/15
 * Time: 4:50 PM
 * File: Customergroup.php
 * Module: magento2-abandonedcart
 */

namespace Ebizmarts\AbandonedCart\Model\System\Config;

class Customergroup
{
    protected $_options;
    /**
     * @var \Magento\Customer\Model\GroupFactory
     */
    protected $groupFactory;

    /**
     * @param \Magento\Customer\Model\GroupFactory $groupFactory
     */
    public function __construct(
        \Magento\Customer\Model\GroupFactory $groupFactory
    ) {
        $this->groupFactory = $groupFactory;
    }


    public function toOptionArray()
    {
        if (!$this->_options) {
            $this->_options = $this->groupFactory->create()->getCollection()
                ->loadData()->toOptionArray();
        }
        return $this->_options;
    }
}