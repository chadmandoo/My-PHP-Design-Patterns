<?php

namespace Patterns\Decorator\Weapon;

/**
 * Class Sword.
 *
 * @package Patterns\Decorator\Damage
 */
class Sword extends Weapon {

  /**
   * Sword constructor.
   */
  public function __construct() {
    $this->description = "This is a sword";
  }

  /**
   * Do some damage with thy sword.
   *
   * @return int
   *   Returns damage.
   */
  public function damage() {
    return 10;
  }
}