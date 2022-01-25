<?php
declare(strict_types=1);
namespace Patterns\Creational\FactoryMethod\Document;

class DocumentSZ implements Document
{

 public function create(): string
 {
   return  'SZ Document Created';
 }
}