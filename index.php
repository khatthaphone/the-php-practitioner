<?php

/**
 *  Step 13:
 *  Hide Your Secret Password
*/

$database = require 'bootstrap.php';

$tasks = $database->selectAll('todos', 'Task');

require 'index.view.php';


?>