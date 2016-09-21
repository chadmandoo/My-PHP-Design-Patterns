<?php

/**
 * @file
 * Example of a factory pattern creating shapes.
 */

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Patterns\Factory\ShapeFactory;

$shape = ShapeFactory::getShape('circle', 3);

// This should output 9*Pi.
echo $shape->getArea() . "<br/>";

$shape = ShapeFactory::getShape('square', 3);

// This should output 9.
echo $shape->getArea() . "<br/>";
