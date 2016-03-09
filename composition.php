<?php
require($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

$duck = new Patterns\Composition\Duck\MallardDuck();
echo $duck->performQuack() . '<br/>';
echo $duck->performFly();