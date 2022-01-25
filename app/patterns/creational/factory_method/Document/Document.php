<?php
declare(strict_types=1);
namespace Patterns\Creational\FactoryMethod\Document;
interface Document
{
    function create(): string;

}