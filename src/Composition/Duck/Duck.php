<?php
namespace Patterns\Composition\Duck;
use Patterns\Composition\Flying\FlyingBehavior;

/**
 * Class Duck
 * @package Patterns\Composition\Duck
 *
 * Duck class
 */
abstract class Duck{
  protected $fly_behavior    = '';
  protected $quack_behavior  = '';

  /**
   * Duckies can swim
   *
   * @return string
   */
  public function swim()
  {
    return "A duckie swims";
  }

  /**
   * @return string
   */
  public function getFlyBehavior() {
    return $this->fly_behavior;
  }

  /**
   * @param FlyingBehavior $fly_behavior
   */
  public function setFlyBehavior(FlyingBehavior $fly_behavior) {
    $this->fly_behavior = $fly_behavior;
  }

  /**
   * @return string
   */
  public function getQuackBehavior() {
    return $this->quack_behavior;
  }

  /**
   * @param QuackBehavior $quack_behavior
   */
  public function setQuackBehavior(QuackBehavior $quack_behavior) {
    $this->quack_behavior = $quack_behavior;
  }

  /**
   * Perform Fly
   *
   * @return string
   */
  public function performFly()
  {
    return($this->fly_behavior->fly());
  }

  /**
   * Perform Quck
   *
   * @return string
   */
  public function performQuack()
  {
    return($this->quack_behavior->quack());
  }

  /**
   * Every duck needs a display
   *
   * @return mixed
   */
  public abstract function display();
}