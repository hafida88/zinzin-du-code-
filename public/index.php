<?php
require_once(__DIR__ . '/../vendor/autoload.php');

use Config\Router;

$router = new Router();

$router->addRoute('/', 'HomeController', 'index');
$router->addRoute('/insription', 'RegisterController', 'index');

$router->handleRequest();
