<?php


require_once 'vendor/autoload.php';

use Symfony\Component\ClassLoader\ClassMapGenerator;
use Symfony\Component\ClassLoader\MapClassLoader;

$loader = new MapClassLoader(ClassMapGenerator::createMap(__DIR__.'/operator'));
$loader->register();

use Operator\System\Operator;

$oper = new Operator();
$oper->initialize();
$oper->process();