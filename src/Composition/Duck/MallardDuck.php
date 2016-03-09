<?php
namespace Patterns\Composition\Duck;

use Patterns\Composition\Flying\Flying;
use Patterns\Composition\Quack\Quack;

/**
 * Class MallardDuck
 * @package Patterns\Composition\Duck
 *
 * Mallard duck class.
 */
class MallardDuck extends Duck{

  /**
   * Constructor
   */
  function __construct()
  {
    $this->fly_behavior = new Flying();
    $this->quack_behavior = new Quack();
  }

  /**
   * Whats our duck look like?
   *
   * @return string
   */
  public function display()
  {
    return "Looks like a mallard duck";
  }
}