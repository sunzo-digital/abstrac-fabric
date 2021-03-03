<?php
require_once 'vendor/autoload.php';

$easyLevelFactory = new \App\LevelFactories\EasyLevel();
$easyMap = $easyLevelFactory->createMap();
$easyObjects = $easyLevelFactory->createObjects();
$easyMap->putObjects($easyObjects->getObjects());
echo '<pre>';
print_r($easyMap);