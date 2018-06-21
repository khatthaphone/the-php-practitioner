<?php

/**
*  Assocciative Array
*/

// create an associative array (similar to object)
$person = [
  'age' => 31,
  'hair' => 'brown',
  'career' => 'web developer'
];

// assign more item to associative array
$person['name'] = 'Jeffrey';

// unset(): delete an variable from associative array
// unset($person['name']);

// <pre></pre>: keep formatting such as new lie, space, etc.
echo "<pre>";
var_dump($person);
echo "</pre>";

// die(): end program immidiately after running a function
// die(var_dump($person));

require 'index.view.php';

?>