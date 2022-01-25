<?php

namespace Patterns\Creational\FactoryMethod\Report;

class ReportCSV implements Report
{


    public function create(): string
    {
       return 'Create ReportCSV';
    }

//    public function load(): string
//    {
//        // TODO: Implement load() method.
//    }
//
//    public function prepare(): string
//    {
//        // TODO: Implement prepare() method.
//    }
//
//    public function save(): string
//    {
//        // TODO: Implement save() method.
//    }
}