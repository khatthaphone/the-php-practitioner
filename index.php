<?php

/**
 *  Step 12:
 *  Functions
*/

class Task {
  public $description;
  public $completed = false;

  public function __construct($description) {
    // Automatic trigger on instantiation
    $this->description = $description;
  }

  public function complete() {
    $this->completed = true;
  }

  public function isComplete() {
    return $this->completed;
  }
}

$tasks = [
  new Task('Go to the store'),
  new Task('Go to the school'),
  new Task('Go to the concert')
];

require 'index.view.php';

?>