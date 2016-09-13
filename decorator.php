<?php

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Patterns\Decorator\Weapon\Sword;
use Patterns\Decorator\Damage\FireDamage;
use Patterns\Decorator\Damage\PiercingDamage;

$damage = new Sword();
$damage = new FireDamage($damage);
$damage = new PiercingDamage($damage);
echo $damage->damage();
