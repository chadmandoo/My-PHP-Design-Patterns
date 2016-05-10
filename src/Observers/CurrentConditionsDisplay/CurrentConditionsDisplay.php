<?php
namespace Patterns\Observers\CurrentConditionsDisplay;

use Patterns\Observers\Observer\Observer;
use Patterns\Observers\Display\Display;
use Patterns\Observers\Subject\Subject;

/**
 * Class CurrentConditionsDisplay
 * @package Patterns\Observers\CurrentConditionsDisplay
 *
 * Example of a class implementing a observer pattern
 */
class CurrentConditionsDisplay implements Observer, Display{
  private $temperature;
  private $humidity;
  private $pressure;
  private $weatherData;

  /**
   * Constructor handling registering with the subject
   *
   * @param \Patterns\Observers\Subject\Subject $weatherData
   */
  function __construct(Subject $weatherData){
    $this->weatherData = $weatherData;
    $this->weatherData->registerObserver($this);
  }

  /**
   * Remove observer
   */
  public function removeObserver()
  {
    $this->weatherData->removeObserver($this);
  }

  /**
   * Update function in which subject will run when updates
   * happen
   *
   * @param $temperature
   * @param $humidity
   * @param $pressure
   */
  public function update($temperature, $humidity, $pressure){
    $this->temperature = $temperature;
    $this->humidity = $humidity;
    $this->pressure = $pressure;
    $this->display();
  }

  /**
   * Display function
   */
  public function display(){
    echo "Temperature: " . $this->temperature . "<br/>"
          . "Humidity: " . $this->humidity . "<br/>"
          . "Pressure: " . $this->pressure;
  }
}