<?php

/**
 * @file
 * Example of Strategy Pattern using the Duck example.
 */

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Patterns\Composition\Duck\MallardDuck;

$duck = new MallardDuck();
echo $duck->performQuack() . '<br/>';
echo $duck->performFly();
