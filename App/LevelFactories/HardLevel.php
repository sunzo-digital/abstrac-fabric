<?php


namespace App\LevelFactories;


use App\Interfaces\AbstractLevel;
use App\Interfaces\Map;
use App\Interfaces\Objects;

class HardLevel implements AbstractLevel
{
    const CELLS = 25;
    const OBJECTS = 5;

    public function createMap(): Map
    {
        // TODO: Implement createMap() method.
    }

    public function createObjects(): Objects
    {
        // TODO: Implement createObjects() method.
    }
}