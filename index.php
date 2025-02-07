<?php
require __DIR__ . '/bootstrap.php';

// Load Dependencies
use Luna\Utils\View;
use Luna\Utils\Environment;
use Luna\Http\Middleware;
use Luna\Http\Router;
use Luna\Http\Cors;

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

// Define Cors
Cors::setOrigins(["*"]);
Cors::setMethods(["*"]);
Cors::setHeaders(["*"]);
Cors::setCredentials(true);
Cors::setMaxAge(0);

// Start Routers
new Router(URL);