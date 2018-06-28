<?php

$router->define([
  '' => 'controllers/index.php',
  'about' => 'controllers/about.php',
  'about/culture' => 'controllers/about-culture.php',
  'contact' => 'controllers/contact.php',
  'names' => 'controllers/add-name.php', // only for POST types
]);
