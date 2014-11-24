<?php

class Stm_Preview_Model_Observer
{

	public function getConfigurableOptions($observer)
	{
		$isPreview = Mage::app()->getFrontController()->getRequest()->getParam('preview');
		if ($isPreview) {
			$product = Mage::registry('current_product');
			$product->setData('page_layout', 'empty');
		}
	}
}