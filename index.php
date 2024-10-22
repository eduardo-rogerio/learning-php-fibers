<?php

use Learning\Fibers\Operation\DatabaseOperation;
use Learning\Fibers\Operation\FileReading;

require 'vendor/autoload.php';

$dbFiber = new Fiber(function () {
    $dbOperation = new DatabaseOperation();
    return $dbOperation->executeOperation();
});

$fileFiber = new Fiber(function () {
    $fileOperation = new FileReading();
    return $fileOperation->executeOperation();
});

echo $dbFiber->start();
echo $fileFiber->start();

echo $fileFiber->resume();
echo $dbFiber->resume();

echo $dbFiber->getReturn();
echo $fileFiber->getReturn();