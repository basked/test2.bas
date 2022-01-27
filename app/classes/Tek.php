<?php

namespace Classes;

use Traits\BasMessage;

class Tek
{
    use BasMessage;

    public static function showMessage()
    {
        BasMessage::showMessage('Trait massage');
    }
}