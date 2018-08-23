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

namespace Sozo\PureChat\Block\System\Config\Form\Field;

use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Sozo\PureChat\Helper\Data;

class Version extends Field
{
    const EXTENSION_URL = 'https://github.com/clivewalkden/Magento2_PureChat';

    /**
     * @var \Sozo\PureChat\Helper\Data $helper
     */
    protected $helper;

    /**
     * @param   \Magento\Backend\Block\Template\Context $context
     * @param   \Sozo\PureChat\Helper\Data              $helper
     */
    public function __construct(
      Context $context,
      Data $helper
    ) {
        $this->helper = $helper;
        parent::__construct($context);
    }

    /**
     * @param AbstractElement $element
     *
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element)
    {
        $extensionVersion = $this->helper->getExtensionVersion();
        $extensionTitle = 'SOZO Design - PureChat';
        $versionLabel = sprintf(
          '<a href="%s" title="%s" target="_blank">%s</a>',
          self::EXTENSION_URL,
          $extensionTitle,
          $extensionVersion
        );
        $element->setValue($versionLabel);

        return $element->getValue();
    }
}
