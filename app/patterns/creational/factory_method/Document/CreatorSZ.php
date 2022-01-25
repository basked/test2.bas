<?php
declare(strict_types=1);
namespace Patterns\Creational\FactoryMethod\Document;

class CreatorSZ extends DocumentCreator
{
    public function factoryMethod(): Document
    {
       return new DocumentSZ();
    }
}