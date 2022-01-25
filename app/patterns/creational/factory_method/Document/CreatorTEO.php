<?php
declare(strict_types=1);
namespace Patterns\Creational\FactoryMethod\Document;

class CreatorTEO extends DocumentCreator
{
    public function factoryMethod(): Document
    {
        return  new DocumentTEO();
    }
}