<?php

namespace Patterns\Factory;

/**
 * Class Circle.
 *
 * @package Patterns\Factory
 */
class Circle {
  protected $radius = 0;

  /**
   * Circle constructor.
   *
   * @param int $radius
   *   Set radius.
   */
  public function __construct($radius) {
    $this->radius = $radius;
  }

  /**
   * Get area.
   *
   * @return int
   *   Return area value.
   */
  public function getArea() {
    return $this->radius * $this->radius * pi();
  }

}
