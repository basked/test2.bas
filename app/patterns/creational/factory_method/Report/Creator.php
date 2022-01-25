<?php

namespace Patterns\Creational\FactoryMethod\Report;

abstract class Creator
{
    abstract public function factoryMethod(): Report;

    public function createReport()
    {
       $report=$this->factoryMethod();
       return $report->create();
    }


}