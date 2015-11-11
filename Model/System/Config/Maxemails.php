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