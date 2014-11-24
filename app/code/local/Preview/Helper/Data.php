<?php
/**
 * Date: 10/3/14
 * Time: 2:40 PM
 */

class Stm_Preview_Helper_Data extends Mage_Core_Helper_Abstract {

	public function getProductUrl($productId) {
		return Mage::getUrl('catalog/product/preview', array('id' => $productId));
	}

}