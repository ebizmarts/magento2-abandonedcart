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