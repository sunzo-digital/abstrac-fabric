<?php


namespace App\Maps;


use App\Interfaces\Map;
use App\Objects\HardObjects;

class HardMap implements Map
{
    const CELLS = 49;
    private $map;

    public function __construct()
    {
        $this->createMap();
    }

    public function putObjects(array $objects)
    {
        $objectsCount = HardObjects::OBJECTS_COUNT;

        if (count($objects) !== $objectsCount)
            throw new \Error('Передано неправильное количество объектов');

        for ($i = $objectsCount; $i >= 1;) {
            $random = rand(1, count($this->map));
            if ($this->map[$random] === HardObjects::OBJECT)
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