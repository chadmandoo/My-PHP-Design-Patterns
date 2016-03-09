<?php

namespace Patterns\Composition\Flying;

/**
 * Interface FlyingBehavior
 * @package Patterns\Composition\Flying
 *
 * Interface for flying behavior
 */
interface FlyingBehavior{

  /**
   * Ensure any class using this behavior implements a fly
   * method
   *
   * @return mixed
   */
  public function fly();
}