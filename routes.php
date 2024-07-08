<?php

$router->get('/',      'HomeController@index');
$router->get('/about', 'HomeController@about');
$router->get('/altgenerator', 'AltGeneratorController@index');

// $router->get('/', 'controllers/home.php');
// $router->get('/about', 'controllers/about.php');
// $router->get('/altgenerator', 'controllers/altgenerator/generate.php');