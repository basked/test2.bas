<?php

namespace Lessons\L01;

class Bas
{
    public string $name = 'basked';
    public int $age = 35;
}

class Lesson_01
{

    public function getVInt(): int
    {
        return $this->v_int;
    }


    public function setVInt(int $v_int): void
    {
        $this->v_int = $v_int;
    }


    public function getVFloat(): float
    {
        return $this->v_float;
    }


    public function setVFloat(float $v_float): void
    {
        $this->v_float = $v_float;
    }


    public function getVString(): string
    {
        return $this->v_string;
    }


    public function setVString(string $v_string): void
    {
        $this->v_string = $v_string;
    }


    public function isVBool(): bool
    {
        return $this->v_bool;
    }


    public function setVBool(bool $v_bool): void
    {
        $this->v_bool = $v_bool;
    }


    public function getVArray(): array
    {
        return $this->v_array;
    }


    public function setVArray(array $v_array): void
    {
        $this->v_array = $v_array;
    }


    public function getVNull()
    {
        return $this->v_null;
    }

    public function setVNull($v_null): void
    {
        $this->v_null = $v_null;
    }


    public function getVResource()
    {
        return $this->v_resource;
    }


    public function setVResource($v_resource): void
    {
        $this->v_resource = $v_resource;
    }


    public function getVObject(): object
    {
        return $this->v_object;
    }


    public function setVObject(object $v_object): void
    {
        $this->v_object = $v_object;
    }

    public function getVCallable()
    {
        return $this->v_callable;
    }


    public function setVCallable($v_callable): void
    {
        $this->v_callable = $v_callable;
    }

    private int $v_int;
    private float $v_float;
    private string $v_string;
    private bool $v_bool;
    private array $v_array = ['basked', 'sony', 'ice', 'hip'];
    private $v_null;
    private $v_resource;
    private object $v_object;
    private $v_callable;


    public function getInfo(bool $fill = false)
    {
        do {
            echo '<pre>';
            print_r($this);
            echo '</pre>';
            if ($fill) {
                $this->setTypes();
            }
            $fill = !$fill;
        } while (!$fill);
    }

    public function setTypes()
    {
        $call = function ($a) {
            return $a * 10;
        };
        $this->setVInt(1234);
        $this->setVFloat(555.1234567);
        $this->setVNull(null);
        $this->setVString("basked");
        $this->setVBool(true);
        $this->setVArray(['Last', 'Move', 'Crew']);
        $bas = new \Lessons\L01\Bas();
        $this->setVObject($bas);
        $this->setVCallable($call(55));
    }

    public function getAllMethods($signat)
    {
        if (is_null($signat)) {
            return get_class_methods($this);
        };
        return array_filter(
            get_class_methods($this),
            function ($e) use ($signat) {
                if (str_contains(strtoupper($e), strtoupper($signat))) {
                    return $e;
                };
            });
    }
}
