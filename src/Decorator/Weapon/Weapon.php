<?php

namespace Patterns\Decorator\Weapon;

/**
 * Class Weapon.
 *
 * @package Patterns\Decorator\Weapon
 */
abstract class Weapon {
  protected $description = "Unknown Weapon";

  /**
   * Description of weapon.
   *
   * @return string
   *   Description of weapon.
   */
  public function getDescription() {
    return $this->description;
  }

  /**
   * Must implement a damage function.
   *
   * @return int
   *   Integer of damage.
   */
  public abstract function damage();
}