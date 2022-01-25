<?php

use Patterns\Creational\FactoryMethod\Report\Creator;
use Patterns\Creational\FactoryMethod\Report\CreatorCSV;
use Patterns\Creational\FactoryMethod\Report\CreatorXml;

require 'vendor/autoload.php';
/*Begin Lesson 1*/
//$l01 = new  \Lessons\L01\Lesson_01();
//$l01->getInfo( true);
//$query = (isset($_GET['q'])?$_GET['q']:'');
//dd($l01->getAllMethods(signat: $query));
/*End Lesson 1*/

/*PATTERN FACTORY METHOD Example 1*/
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
function clientCodeReport(Creator $creator)
{
    echo $creator->createReport();
}

clientCodeReport(new CreatorXml());
clientCodeReport(new CreatorCSV());
