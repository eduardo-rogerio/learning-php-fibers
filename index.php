<?php

use Learning\Fibers\Progress\LongOperation;

require 'vendor/autoload.php';

$operation = new LongOperation();

$fiber = new Fiber(function() use ($operation) {
    $operation->executeOperation() ;
});

echo $fiber->start();

while (!$fiber->isTerminated()) {

    $progress = $fiber->resume();

    if($progress) {
        echo $progress;
    }
}

echo $fiber->getReturn();