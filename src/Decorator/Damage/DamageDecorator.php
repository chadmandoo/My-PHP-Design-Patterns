<?php

namespace Patterns\Decorator\Damage;

use Patterns\Decorator\Weapon\Weapon;

/**
 * Class DamageDecorator.
 *
 * @package Patterns\Decorator\Damage
 */
abstract class DamageDecorator extends Weapon {
  protected $damageMultiplier = 1;

  /**
   * Sub classes must implement a damage multiplier.
   *
   * @return int
   *   Returns integer value for damage.
   */
  public abstract function getDamageMultiplier();
}