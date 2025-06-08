<?php

use App\Controllers\Pages;
use Luna\Http\Request;
use Luna\Http\Response;

$router->get('/', [
    function(Request $request, Response $response) {
        return Pages\HomeController::show($request, $response);
    }
]);