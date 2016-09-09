<?php

namespace Patterns\Decorator\Damage;

use Patterns\Decorator\Weapon\Weapon;

/**
 * Class PiercingDamage.
 *
 * @package Patterns\Decorator\Damage
 */
class PiercingDamage extends DamageDecorator {
  private $weapon;

  /**
   * PiercingDamage constructor.
   *
   * @param \Patterns\Decorator\Weapon\Weapon $weapon
   *   Weapon.
   */
  public function __construct(Weapon $weapon) {
    $this->damageMultiplier = 2;
    $this->weapon = $weapon;
  }

  /**
   * Get the damage multiplier.
   *
   * @return int
   *   Damage multiplier.
   */
  public function getDamageMultiplier() {
    return $this->damageMultiplier();
  }

  /**
   * Add damage to our weapon.
   *
   * @return int
   *   Returned damage.
   */
  public function damage() {
    return $this->damageMultiplier * $this->weapon->damage();
  }
}