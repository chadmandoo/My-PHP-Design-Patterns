<?php

namespace Patterns\Composition\Quack;

/**
 * Class QuackSilence
 * @package Patterns\Composition\Quack
 *
 * No quackie for you
 */
class QuackSilence implements QuackBehavior{

  /**
   * Quack method
   *
   * @return string
   */
  public function quack(){
    return "<< Silence >>";
  }
}