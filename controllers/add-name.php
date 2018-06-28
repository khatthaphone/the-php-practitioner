<?php
// var_dump($_POST['name']);
$app['database']->insert('todos', $_POST['name']);
var_dump($app['database']->selectAll('todos'));