<?php
namespace   Patterns\Creational\FactoryMethod\Product;
abstract class Product
{
    private $sku;
    private $name;
    protected $type=null;
  public function __construct($sku, $name)
  {
      $this->sku=$sku;
      $this->name=$name;
  }


}