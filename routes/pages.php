<?php
use App\Controllers\Pages;

$router->get('/', [
    function($request, $response) {
        return Pages\HomeController::homePage($request, $response);
    }
]);