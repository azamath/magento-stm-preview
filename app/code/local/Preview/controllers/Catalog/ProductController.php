<?php

require_once 'Mage/Catalog/controllers/ProductController.php';

class Stm_Preview_Catalog_ProductController extends Mage_Catalog_ProductController {

	public function previewAction() {

		try {
			if ($product = $this->_initProduct()) {
				$this->loadLayout(false);
				$this->renderLayout($this->getRequest()->isAjax() ? 'product.info' : '');
			}
			else {
				throw new Exception();
			}
		}
		catch (Exception $e) {
			Mage::logException($e);
			$this->_forward('noRoute');
		}

	}


}