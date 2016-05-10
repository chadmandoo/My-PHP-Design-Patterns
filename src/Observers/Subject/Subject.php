<?php
namespace Patterns\Observers\Subject;
use Patterns\Observers\Observer\Observer;

/**
 * Interface Subject
 *
 * Interface for subject classes
 *
 * @package Patterns\Observers\Subject
 */
interface Subject
{
  public function registerObserver(Observer $a);
  public function removeObserver(Observer $a);
  public function notifyObservers();
}