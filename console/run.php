<?php

require 'vendor/autoload.php';

use App\Lib\Directions;

//Two arguments example
if (!isset($argv[1])) {
    die('Input file is not specified');
}
if (!isset($argv[2])) {
    die('Output file is not specified');
}

$fileIn = $argv[1];
$fileOut = $argv[2];

$directions = new Directions();
$directions->addDirection([1,2,3,4,5]);
var_dump($directions->directions);