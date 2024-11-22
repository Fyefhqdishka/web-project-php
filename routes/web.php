<?php

global $router;

use App\Controllers\AuthController;

// Определяем маршруты в виде массива
$routes = [
    'POST' => [
        '/auth/register' => [AuthController::class, 'register'],
        '/auth/login' => [AuthController::class, 'login'],
    ],
    'GET' => [
        '/protected/user' => [AuthController::class, 'getUser'],
    ],
];

// Регистрируем маршруты из массива
foreach ($routes as $method => $paths) {
    foreach ($paths as $path => $handler) {
        $router->{strtolower($method)}($path, function () use ($handler) {
            [$class, $method] = $handler;
            (new $class())->$method($_SERVER);
        });
    }
}
