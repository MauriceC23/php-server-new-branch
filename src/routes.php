<?php

use Slim\App;
use App\Controllers\UserController;

return function (App $app) {
    $app->get('/test', function ($request, $response, $args) {
        $response->getBody()->write("Routes test is working!");
        return $response;
    });

    $app->get('/users', [UserController::class, 'getAll']);
    $app->post('/users', [UserController::class, 'create']);
};
