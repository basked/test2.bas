<?php
require_once '../../vendor/autoload.php';

use Structures\SingleLinkedList\Node;
use Structures\SingleLinkedList\SingleLinkedList;

$linkedList = new SingleLinkedList('header');
$linkedList->insert('header', 'China');
$linkedList->insert('China', 'USA');
$linkedList->insert('USA','England');
$linkedList->insert('England','Australia');
echo'Связанный список: ';
$linkedList->display();
echo "</br>";
echo '----- Удалить узел США -----';
echo "</br>";
$linkedList->delete('USA');
echo'Связанный список: ';
$linkedList->display();
echo "</br>";
echo '----- Обновить узел Англия до Японии -----';
echo "</br>";
$linkedList->update('England', 'Japan');
echo'Связанный список: ';
$linkedList->display();
//echo "</br>";
// echo "----- Очистить связанный список -----";
//echo "</br>";
//$linkedList->clear();
//$linkedList->display();