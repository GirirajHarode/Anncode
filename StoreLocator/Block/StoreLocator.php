<?php
namespace Anncode\StoreLocator\Block;

class StoreLocator extends \Magento\Framework\View\Element\Template
{
	

    protected $_storelocatorFactory;
    protected $_status;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
         \Anncode\StoreLocator\Model\StoreLocatorFactory $storelocatorFactory,
        \Anncode\StoreLocator\Model\Status $status
    ) 
    {
    	 $this->_storelocatorFactory = $storelocatorFactory;
    	 $this->_status = $status;
        parent::__construct($context);
    }
    
    
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }
    
    public function getAllStores()
    {
        $collection = $this->_storelocatorFactory->create()->getCollection();
        return $collection;
    }
}
