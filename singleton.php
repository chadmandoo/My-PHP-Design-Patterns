<?php

/**
 * @file
 * Example using Singleton Pattern.
 */

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Patterns\Singleton\Singleton;

$singleton = Singleton::getInstance();
echo $singleton->getDescription();
