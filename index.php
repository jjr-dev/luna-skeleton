<?php
require __DIR__ . '/bootstrap.php';

// Load Dependencies
use Luna\Utils\View;
use Luna\Utils\Environment;
use Luna\Http\Middleware;
use Luna\Http\Router;

// Define URL Global Var
define("URL", Environment::get('URL'));

// Define View Vars
View::define([
    'URL' => URL,
    'PUBLIC'  => URL . '/public'
]);

// Define Middlewares
Middleware::setMap([]);
Middleware::setDefault([]);

// Start Routers
new Router(URL);