<?php

namespace Patterns\Singleton;

/**
 * Class Singleton.
 *
 * @package Patterns\Singleton
 */
class Singleton {

  private static $uniqueInstance;

  /**
   * Singleton constructor.
   */
  public function __construct() {}

  /**
   * Return instance of Singleton.
   *
   * @return \Patterns\Singleton\Singleton
   *   Singleton Object.
   */
  public static function getInstance() {
    if (!self::$uniqueInstance) {
      self::$uniqueInstance = new Singleton();
    }

    return self::$uniqueInstance;
  }

  /**
   * Returns an example string.
   *
   * @return string
   *   Custom string.
   */
  public function getDescription() {
    return "Hello there Singleton user";
  }

}
