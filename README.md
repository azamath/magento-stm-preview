Use the following code on products list template for getting preview url:

```php
echo Mage::helper('preview')->getProductUrl($_product->getId())
```