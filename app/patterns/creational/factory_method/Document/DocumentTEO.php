<?php
declare(strict_types=1);
namespace Patterns\Creational\FactoryMethod\Document;

class DocumentTEO implements Document
{

    public function create(): string
    {
        return  'TEO Document Created';
    }
}