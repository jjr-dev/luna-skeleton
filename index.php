<?php
    require __DIR__ . '/vendor/autoload.php';

    // Load Dependencies
    use Luna\Utils\View;
    use Luna\Utils\Environment;
    use Luna\Http\Middleware;
    use Luna\Http\Router;
    use Luna\Db\Database;

    // Define Root Directory
    define("ROOT_DIR", __DIR__);

    // Load Environment
    Environment::load(ROOT_DIR);
    
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