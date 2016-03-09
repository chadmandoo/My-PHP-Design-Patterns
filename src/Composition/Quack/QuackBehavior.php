<?php

namespace Patterns\Composition\Quack;

/**
 * Interface QuackBehavior
 * @package Patterns\Composition\Quack
 *
 * Interface for quack behavior
 */
interface QuackBehavior{

  /**
   * Ensure any class using this behavior implements a quack
   * method
   *
   * @return mixed
   */
  public function quack();
}