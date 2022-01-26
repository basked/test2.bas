<?php

namespace Patterns\Creational\FactoryMethod\Product;

class ProductFactory
{
    public static function build($productType,  $sku, $name)
    {
        $product = __NAMESPACE__ .'\\'.'Product'. ucfirst($productType);

        if (class_exists($product,true)) {
            return new $product($sku, $name);
        } else {
            throw new \Exception("Неверный тип продукта");
        }
    }
}
