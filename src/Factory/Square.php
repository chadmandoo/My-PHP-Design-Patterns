<?php

namespace Patterns\Factory;

/**
 * Class Square.
 *
 * @package Patterns\Factory
 */
class Square {
  protected $side = 0;

  /**
   * Square constructor.
   *
   * @param int $side
   *   Set side.
   */
  public function __construct($side) {
    $this->side = $side;
  }

  /**
   * Get area.
   *
   * @return int
   *   Area value.
   */
  public function getArea() {
    return $this->side * $this->side;
  }
}
