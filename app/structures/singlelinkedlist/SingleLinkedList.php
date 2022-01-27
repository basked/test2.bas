<?php

namespace Structures\SingleLinkedList;

class SingleLinkedList
{
 private $header; //головной узел
    public function __construct($data)
    {
        $this->header= new Node($data);
    }
    // находим узел
    public function find($item){
        $current=$this->header;
        while ($current->data!=$item){
            $current=$current->next;
        }
        return $current;
    }
    // вставка
    // (после узла) вставляем новый узел
    public function insert($item, $new) {
        $newNode = new Node($new);
        $current = $this->find($item);
        $newNode->next = $current->next;
        $current->next = $newNode;
        return true;
    }

    // Обновить узел
    public function update($old, $new) {
        $current = $this->header;
        if ($current->next == null) {
            echo "Связанный список пуст!";
            return;
        }
        while ($current->next != null) {
            if ($current->data == $old) {
                break;
            }
            $current = $current->next;
        }
        return $current->data = $new;
    }

    // Находим предыдущий узел удаляемого узла
    public function findPrevious($item) {
        $current = $this->header;
        while ($current->next != null && $current->next->data != $item) {
            $current = $current->next;
        }
        return $current;
    }

    // Удаляем узел из связанного списка
    public function delete($item) {
        $previous = $this->findPrevious($item);
        if ($previous->next != null) {
            $previous->next = $previous->next->next;
        }
    }

    // Интеграция findPrevious и delete
    public function remove($item) {
        $current = $this->header;
        while ($current->next != null && $current->next->data != $item) {
            $current = $current->next;
        }
        if ($current->next != null) {
            $current->next = $current->next->next;
        }
    }

    // Очистить связанный список
    public function clear() {
        $this->header = null;
    }

    // Отображаем элементы связанного списка
    public function display() {
        $current = $this->header;
        if ($current->next == null) {
            echo "Связанный список пуст!";
            return;
        }
        while ($current->next != null) {
            echo $current->next->data . "&nbsp;&nbsp;&nbsp";
            $current = $current->next;
        }
    }

}