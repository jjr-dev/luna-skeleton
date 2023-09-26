<?php
    date_default_timezone_set("America/Sao_Paulo");

    require __DIR__ . '/bootstrap.php';

    // Load Dependencies
    use Luna\Utils\View;
    use Luna\Utils\Environment;
    use Luna\Http\Middleware;
    use Luna\Http\Router;
    use Luna\Db\Database;

    // Define URL Global Var
    define("URL", Environment::get('URL'));
    
    // Define View Vars
    View::define([
        'URL' => URL,
        'PUBLIC'  => URL . '/public'
    ]);

    // Boot Database
    Database::boot();

    // Define Middlewares
    Middleware::setMap([]);
    Middleware::setDefault([]);

    // Start Routers
    new Router(URL);