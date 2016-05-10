<?php
namespace Patterns\Observers\Observer;

/**
 * Interface Observer
 *
 * Interface for observer classes
 *
 * @package Patterns\Observers\Observer
 */
interface Observer
{
  public function update($temp, $humidity, $pressure);
}