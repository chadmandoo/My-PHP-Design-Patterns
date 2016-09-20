<?php

/**
 * @file
 * Demonstrating Active Record Pattern.
 */

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Patterns\ActiveRecord\Player;

// Will throw a PDO Exception unless database connections work.
$player = new Player();
$player->load(2);

echo '<pre>';
print_r($user);
