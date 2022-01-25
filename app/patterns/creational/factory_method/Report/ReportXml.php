<?php

namespace Patterns\Creational\FactoryMethod\Report;

class ReportXml implements Report
{

    public function create(): string
    {
        return 'Create ReportXml';
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