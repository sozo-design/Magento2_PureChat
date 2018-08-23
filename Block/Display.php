<?php
/**
 * SOZO Design
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @category    SOZO Design
 * @package     Sozo_PureChat
 * @copyright   Copyright (c) 2018 SOZO Design (https://sozodesign.co.uk)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 */

namespace Sozo\PureChat\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Sozo\PureChat\Helper\Data;

class Display extends Template
{
    /**
     * @var \Sozo\PureChat\Helper\Data
     */
    protected $chatHelper;

    /**
     * Display constructor.
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Sozo\PureChat\Helper\Data                       $chatHelper
     * @param array                                            $data
     */
    public function __construct(Context $context, Data $chatHelper, array $data = [])
    {
        $this->chatHelper = $chatHelper;
        parent::__construct($context, $data);
    }

    /**
     * Get the Widget ID
     *
     * @return mixed
     */
    public function getWidgetId()
    {
        return $this->chatHelper->getWidgetId();
    }

    /**
     * Generate the PureChat output
     *
     * @return string
     */
    public function _toHtml()
    {
        if (!$this->chatHelper->isEnabled()) {
            return '';
        }

        return parent::_toHtml();
    }
}
