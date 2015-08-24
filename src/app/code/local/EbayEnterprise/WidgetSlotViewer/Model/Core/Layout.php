<?php
/**
 * Copyright (c) 2015 eBay Enterprise, Inc.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @copyright   Copyright (c) 2015 eBay Enterprise, Inc. (http://www.ebayenterprise.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class EbayEnterprise_WidgetSlotViewer_Model_Core_Layout extends Mage_Core_Model_Layout {

	protected function _generateBlock($node, $parent)
	{
		$viewerEnabled = Mage::getStoreConfigFlag('dev/debug/widgetslotviewer_enable');

		if ($viewerEnabled && isset($node->label)) {
			$blockLabel = $node->label;
			$viewerName = $node['name'] . '.slot_viewer';

			$viewerXml =
				"<block type='core/template' name='$viewerName' template='widgetslotviewer/slotviewer.phtml'>" .
				"<action method='setParentLabel'><label>$blockLabel</label></action>" .
				"</block>";

			$viewerChild = new Varien_Simplexml_Element($viewerXml);
			$node->appendChild($viewerChild);
		}

		return parent::_generateBlock($node, $parent);
	}

}
