<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Position2\Advancedcompare\Block\Index;

class Index extends \Magento\Framework\View\Element\Template
{
    public $helperData;
    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \Position2\Advancedcompare\Helper\Data $helperData,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->helperData = $helperData;
    }
}
