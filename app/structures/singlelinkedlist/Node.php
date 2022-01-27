<?php
namespace Structures\SingleLinkedList;
class Node
{
 public $data; // данные узла
 public $next; // следующий узел
    public function __construct($data)
    {
        $this->data= $data;
        $this->next=null; // ссылка на следующий NULL
    }
}