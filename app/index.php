<?php

use Patterns\Creational\FactoryMethod\Product\Product;
use   Patterns\Creational\FactoryMethod\Product\ProductFactory  ;
use Patterns\Creational\FactoryMethod\Product\ProductTable;
use Patterns\Creational\FactoryMethod\Report\Creator;
use Patterns\Creational\FactoryMethod\Report\CreatorCSV;
use Patterns\Creational\FactoryMethod\Report\CreatorXml;

require 'vendor/autoload.php';
/*Begin Lesson recursion*/
//$l01 = new  \Lessons\L01\Lesson_01();
//$l01->getInfo( true);
//$query = (isset($_GET['q'])?$_GET['q']:'');
//dd($l01->getAllMethods(signat: $query));
/*End Lesson recursion*/

/*PATTERN FACTORY METHOD Example recursion*/
//function clientCode(\Patterns\Creational\FactoryMethod\Document\DocumentCreator $creator)
//{
//    echo  $creator->someOperation();
//}
//echo "App: Launched with the ConcreteCreator.\n";
//clientCode(new \Patterns\Creational\FactoryMethod\Document\CreatorSZ());
//echo '<br>';
//echo "App: Launched with the ConcreteCreator.\n";
//clientCode(new \Patterns\Creational\FactoryMethod\Document\CreatorTEO());

/*PATTERN FACTORY METHOD Example 2*/
//function clientCodeReport(Creator $creator)
//{
//    echo $creator->createReport();
//}
//
//clientCodeReport(new CreatorXml());
//clientCodeReport(new CreatorCSV());

/*PATTERN FACTORY METHOD Example 3*/
//try {
//    $product = ProductFactory::build('table', 'table_sku', 'table_name');
//    $product1 = ProductFactory::build('sofa', 'sofa_sku', 'sofa');
//    dd($product, $product1);
//} catch (Exception $e) {
//    echo  $e;
//}

// ALGORITMS
//$rec = new \Algoritms\Recursion\PaymentMoney(6100);
////echo $rec->getSumBills();
//$rec->showMessage();


BasHelpers\Helpers::fill_header('asdsss');

