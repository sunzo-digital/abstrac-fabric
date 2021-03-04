<?php


namespace App\LevelFactories;


use App\Interfaces\AbstractLevel;
use App\Interfaces\Map;
use App\Interfaces\Objects;
use App\Maps\HardMap;
use App\Objects\HardObjects;

class HardLevel implements AbstractLevel
{
    public function createMap(): Map
    {
        return new HardMap();
    }

    public function createObjects(): Objects
    {
        return new HardObjects();
    }
}