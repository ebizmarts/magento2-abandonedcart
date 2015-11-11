<?php
/**
 * Ebizmarts_Abandonedcart Magento JS component
 *
 * @category    Ebizmarts
 * @package     Ebizmarts_Abandonedcart
 * @author      Ebizmarts Team <info@ebizmarts.com>
 * @copyright   Ebizmarts (http://ebizmarts.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
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