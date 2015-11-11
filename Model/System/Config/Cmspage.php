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

class Cmspage
{
    /**
     * @var \Magento\Cms\Model\Page
     */
    protected $_page;

    /**
     * @param \Magento\Cms\Model\Page $page
     */
    public function __construct(
        \Magento\Cms\Model\Page $page
    ) {
        $this->_page = $page;
    }
    public function toOptionArray()
    {
        $pages = $this->_page->getCollection()->addOrder('title','asc');
        return ['checkout/cart' => 'Shopping Cart (default page)'] + $pages->toOptionIdArray();
    }
}