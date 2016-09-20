<?php

namespace Patterns\ActiveRecord;

/**
 * Class Player.
 *
 * @package Patterns\ActiveRecord
 */
class Player {
  protected $connection = NULL;

  /**
   * Player constructor.
   */
  public function __construct() {
    $this->connection = new \PDO("mysql:host=localhost;dbname=development", 'developer', 'developer');
  }

  /**
   * Load player record.
   *
   * @param int $id
   *   ID for the player.
   */
  public function load($id) {
    $sql = 'SELECT * FROM players WHERE uid = ' . (int) $id;
    $result = $this->connection->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);

    foreach ($row as $column => $value) {
      $this->$column = $value;
    }
  }

}