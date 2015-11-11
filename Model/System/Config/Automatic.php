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