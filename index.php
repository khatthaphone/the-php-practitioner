<?php

/**
 *  Step 19:
 *  Forms, Reques Types, and Routing
*/

$database = require 'core/bootstrap.php';

require Router::load('routes.php')
  ->direct(Request::uri(), Request::method());

// $router = new Router;

// require 'routes.php';


// require $router->direct($uri);


