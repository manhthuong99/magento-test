<?php

namespace AHT\ConfigurableProduct\Controller\Adminhtml\Product;


use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action;

class Config extends \Magento\Backend\App\Action
{
    protected $_pageFactory;

    public function __construct(Action\Context $context, PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        echo 123;
        return $this->_pageFactory->create();
    }
}
