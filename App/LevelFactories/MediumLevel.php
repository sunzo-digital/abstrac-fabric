<?php


namespace App\LevelFactories;


use App\Interfaces\AbstractLevel;
use App\Interfaces\Map;
use App\Interfaces\Objects;

class MediumLevel implements AbstractLevel
{
    const CELLS = 49;
    const OBJECTS = 7;

    public function createMap(): Map
    {
        // TODO: Implement createMap() method.
    }

    public function createObjects(): Objects
    {
        // TODO: Implement createObjects() method.
    }
}