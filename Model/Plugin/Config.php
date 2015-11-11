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

namespace Ebizmarts\AbandonedCart\Model\Plugin;

class Config
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager;

    /**
     * @var \Magento\Framework\Module\ModuleList\Loader
     */
    protected $_loader;
    /**
     * @var \Magento\Framework\App\Config\Storage\WriterInterface
     */
    protected $_writer;


    /**
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param \Magento\Framework\Module\ModuleList\Loader $loader
     * @param \Magento\Framework\App\Config\Storage\WriterInterface $configWriter
     */
    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Magento\Framework\Module\ModuleList\Loader $loader,
        \Magento\Framework\App\Config\Storage\WriterInterface $configWriter
    )
    {
        $this->_objectManager = $objectManager;
        $this->_loader = $loader;
        $this->_writer = $configWriter;
    }
    public function aroundSave(\Magento\Config\Model\config $config,\Closure $proceed)
    {
        $ret = $proceed();
        $sectionId = $config->getSection();
        if($sectionId=='abandonedcart'&&!$this->_objectManager->create('\Ebizmarts\Mandrill\Helper\Data')->isActive($config->getStore()))
        {
            $this->_writer->save(\Ebizmarts\AbandonedCart\Model\Config::ACTIVE,0,$config->getScope(),$config->getScopeId());
        }
        return $ret;
    }

}