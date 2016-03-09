<?php

namespace Patterns\Composition\Flying;

/**
 * Class Flying
 * @package Patterns\Composition\Flying
 *
 * Flying class
 */
class Flying implements FlyingBehavior{

  /**
   * Whatever uses this class can fly!
   *
   * @return string
   */
  public function fly(){
    return "Flies great";
  }
}