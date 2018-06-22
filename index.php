<?php

/**
 *  Step 13:
 *  Refactor and Collaborators
*/
$database = require 'bootstrap.php';
require 'Task.php';


$tasks = $database->selectAll('todos', 'Task');

die(var_dump($tasks));

require 'index.view.php';


?>