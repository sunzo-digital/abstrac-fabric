<?php
require_once 'vendor/autoload.php';

$levels = [
    1 => [new \App\LevelFactories\EasyLevel(), new \App\Maps\EasyMap()],
    2 => [new \App\LevelFactories\MediumLevel(), new \App\Maps\MediumMap()],
    3 => [new \App\LevelFactories\HardLevel(), new \App\Maps\HardMap()],
];

$level = $_GET['level'] ?? 1;
if ($level > 3 || $level < 1) $level = 1;
[$factory, $mapClass] = $levels[$level];

$map = $factory->createMap();
$objects = $factory->createObjects();
$map->putObjects($objects->getObjects());

$mapDrawer = new \App\MapDrawer();
$mapDrawer->drawMap($map->getMap(), $mapClass::CELLS);
die($mapDrawer->getMap());