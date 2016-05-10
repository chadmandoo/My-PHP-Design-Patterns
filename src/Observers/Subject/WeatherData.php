<?php
namespace Patterns\Observers\Subject;

use Patterns\Observers\CurrentConditionsDisplay;
use Patterns\Observers\Observer\Observer;

/**
 * Class WeatherData
 *
 * The weather data class in which observers will register
 * and be notified when values are updated.
 *
 * @package Patterns\Observers\Subject
 */
class WeatherData implements Subject
{
  private $observers;
  private $temperature;
  private $humidity;
  private $pressure;

  /**
   * Function to register an observer
   *
   * @param \Patterns\Observers\Observer\Observer $o
   */
  public function registerObserver(Observer $o) {
    $this->observers[] = $o;
  }

  /**
   * Function to remove observer
   *
   * @param \Patterns\Observers\Observer\Observer $o
   */
  public function removeObserver(Observer $o) {
    foreach($this->observers as $key => $observer){
      if($observer === $o){
        unset($this->observers[$key]);
      }
    }
  }

  /**
   * Function to notify observers
   */
  public function notifyObservers() {
    foreach($this->observers as $key => $observer){
      $observer->update($this->temperature, $this->humidity, $this->pressure);
    }
  }

  /**
   * Measurements have changed
   */
  public function measurementsChange(){
    $this->notifyObservers();
  }

  /**
   * Set the measurements then notify observers
   *
   * @param $temperature
   * @param $humidity
   * @param $pressure
   */
  public function setMeasurements($temperature, $humidity, $pressure){
    $this->temperature = $temperature;
    $this->humidity = $humidity;
    $this->pressure = $pressure;
    $this->measurementsChange();
  }
}