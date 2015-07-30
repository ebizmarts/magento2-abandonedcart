<?php
/**
 * Author: info@ebizmarts.com
 * Date: 7/29/15
 * Time: 3:06 PM
 * File: Cmspage.php
 * Module: magento2-abandonedcart
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