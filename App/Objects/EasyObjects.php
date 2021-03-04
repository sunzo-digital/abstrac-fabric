<?php


namespace App\Objects;


class EasyObjects implements \App\Interfaces\Objects
{
    const OBJECT = 1;
    const OBJECTS_COUNT = 3;
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