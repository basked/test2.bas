<?php

namespace Patterns\Creational\FactoryMethod\Report;


class CreatorXml extends Creator
{
    public function factoryMethod(): Report
    {
        return new ReportXml();
    }
}