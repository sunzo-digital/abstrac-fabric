<?php


namespace App\Objects;


class MediumObjects implements \App\Interfaces\Objects
{
    const OBJECT = 2;
    const OBJECTS_COUNT = 5;
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