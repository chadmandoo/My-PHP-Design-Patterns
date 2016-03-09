<?php

namespace Patterns\Composition\Quack;

/**
 * Class Quack
 * @package Patterns\Composition\Quack
 *
 * Quack like a duck
 */
class Quack implements QuackBehavior{

  /**
   * Quack method
   *
   * @return string
   */
  public function quack(){
    return "Quack";
  }
}