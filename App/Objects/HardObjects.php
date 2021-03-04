<?php


namespace App\Objects;


class HardObjects implements \App\Interfaces\Objects
{
    const OBJECT = 3;
    const OBJECTS_COUNT = 7;
    private $objects;

    public function __construct()
    {
        $this->objects = array_fill(1, self::OBJECTS_COUNT, self::OBJECT);
    }

    public function getObjects(): array
    {
        return $this->objects;
    }
}