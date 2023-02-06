<?php

require_once __DIR__ . "/../vendor/autoload.php";

use App\AbcBank;
use App\ClassA;

$bank = new AbcBank;
$classA = new ClassA;
$classA->show();
$classA->insert('Iphone');
$classA->create('Xanh dương');
