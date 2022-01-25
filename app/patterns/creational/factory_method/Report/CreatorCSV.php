<?php

namespace Patterns\Creational\FactoryMethod\Report;

class CreatorCSV extends Creator
{
   public function factoryMethod(): Report
   {
     return new ReportCSV();
   }
}