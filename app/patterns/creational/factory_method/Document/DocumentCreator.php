<?php
declare(strict_types=1);
namespace Patterns\Creational\FactoryMethod\Document;

abstract class DocumentCreator
{
    abstract public function factoryMethod(): Document;

    public function someOperation(): string
    {
        // Вызываем фабричный метод, чтобы получить объект-документ.
        $document = $this->factoryMethod();
        // Далее, работаем с этим документом.
        return $document->create();
    }
}