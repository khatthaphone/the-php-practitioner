<?php

/**
 *  Step 17:
 *  Dry Up Your Views
*/

$database = require 'core/bootstrap.php';

require Router::load('routes.php')
  ->direct(Request::uri());

// $router = new Router;

// require 'routes.php';


// require $router->direct($uri);


