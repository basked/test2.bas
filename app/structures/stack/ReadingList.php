<?php

namespace Structures\Stack;

use http\Exception;

class ReadingList
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 10)
    {
        $this->limit = $limit;
        $this->stack = array();
    }

    public function push($item)
    {
        if (count($this->stack) < $this->limit) {
            array_unshift($this->stack, $item);
        } else {
            throw new \RuntimeException('Стек переполнен!');
        }
    }

    public function pop()
    {
        if (empty($this->stack)){
            throw new \RuntimeException('Стек пуст');
        };
        return array_shift($this->stack);
    }

    public function top()
    {
        return current($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }

}