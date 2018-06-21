<?php

/**
 *  Step 10:
 *  Functions
*/

$animal = ['dog', 'cat'];

function dd($data) {
  echo "<pre>";
  die(var_dump($data));
  echo "</pre>";
}

dd('Hello');

// require 'index.view.php';

?>