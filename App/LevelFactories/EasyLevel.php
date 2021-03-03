<?php


namespace App\LevelFactories;


use App\Interfaces\AbstractLevel;
use App\Interfaces\Map;
use App\Interfaces\Objects;
use App\Maps\EasyMap;
use App\Objects\EasyObjects;

class EasyLevel implements AbstractLevel
{
    public function createMap(): Map
    {
        return new EasyMap();
    }

    public function createObjects(): Objects
    {
        return new EasyObjects();
    }
}