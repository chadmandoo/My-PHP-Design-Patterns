<?php

namespace Patterns\Composition\Flying;

/**
 * Class FlyingNoWings
 * @package Patterns\Composition\Flying
 *
 * Fly with no wings
 */
class FlyingNoWings implements FlyingBehavior{

  /**
   * Fly method
   *
   * @return string
   */
  public function fly(){
    return "Can't fly without wings";
  }
}