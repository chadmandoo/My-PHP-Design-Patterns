<?php

namespace Patterns\Factory;

use Patterns\Factory\Circle;
use Patterns\Factory\Square;

/**
 * Class ShapeFactory.
 *
 * @package Patterns\Shape
 */
class ShapeFactory {

  /**
   * Get the shape.
   *
   * @param string $name
   *   Which shape?
   * @param int $dimension
   *   Dimension.
   *
   * @return \Patterns\Factory\Circle|\Patterns\Factory\Square
   *   Returns a shape object.
   */
  public static function getShape($name, $dimension) {
    switch ($name) {
      case 'circle':
        return new Circle($dimension);

      case 'square':
        return new Square($dimension);

      default:
        throw new \Exception("Unrecognized shape");
    }
  }

}
