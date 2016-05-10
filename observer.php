<?php
require($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');
use Patterns\Observers\Subject\WeatherData;
use Patterns\Observers\CurrentConditionsDisplay\CurrentConditionsDisplay;

$weatherData = new WeatherData();
$current_condition = new CurrentConditionsDisplay($weatherData);
$current_condition2 = new CurrentConditionsDisplay($weatherData);

$weatherData->setMeasurements(1, 2, 3);

$current_condition2->removeObserver();