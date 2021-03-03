<?php


namespace App\Interfaces;


interface AbstractLevel
{
    public function createMap() : Map;
    public function createObjects() : Objects;

}