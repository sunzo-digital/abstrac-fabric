<?php


namespace App\LevelFactories;


use App\Interfaces\AbstractLevel;
use App\Interfaces\Map;
use App\Interfaces\Objects;
use App\Maps\MediumMap;
use App\Objects\MediumObjects;

class MediumLevel implements AbstractLevel
{
    public function createMap(): Map
    {
        return new MediumMap();
    }

    public function createObjects(): Objects
    {
        return new MediumObjects();
    }
}