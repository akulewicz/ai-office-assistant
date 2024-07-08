<?php

use Framework\Router;
use Dotenv\Dotenv;

const BASE_PATH = __DIR__ . '/../';
require BASE_PATH . 'vendor/autoload.php';
require BASE_PATH . 'helpers.php';

$dotenv = Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

$router = new Router();
$routes = require base_path('routes.php');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];


$router->route($uri, $method);



