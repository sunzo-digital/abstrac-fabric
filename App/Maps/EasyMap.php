<?php


namespace App\Maps;


use App\Interfaces\Map;
use App\Objects\EasyObjects;

class EasyMap implements Map
{
    const CELLS = 9;
    private $map;

    public function __construct()
    {
        $this->createMap();
    }

    public function putObjects(array $objects)
    {
        $objectsCount = EasyObjects::OBJECTS_COUNT;

        if (count($objects) !== $objectsCount)
            throw new \Error('Передано неправильное количество объектов');

        for ($i = $objectsCount; $i >= 1;) {
            $random = rand(1, count($this->map));
            if ($this->map[$random] === EasyObjects::OBJECT)
                continue;
            else {
                $this->map[$random] = array_pop($objects);
                $i--;
            }
        }
    }

    public function createMap()
    {
        $this->map = array_fill(1, self::CELLS, 0);
    }


    public function getMap()
    {
        return $this->map;
    }
}