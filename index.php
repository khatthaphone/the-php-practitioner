<?php

/**
 *  Step 13:
 *  Refactor and Collaborators
*/

require 'Task.php';
require 'functions.php';
require 'database/Connection.php';


$pdo = Connection::make();


$tasks = fetchAllTasks($pdo);


require 'index.view.php';

?>