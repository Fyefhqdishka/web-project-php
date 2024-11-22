<?php

// Подключаем автозагрузчик Composer
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/storage/database.php';

use Dotenv\Dotenv;
use Bramus\Router\Router;

// Загружаем переменные окружения из .env файла
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Инициализация роутера
$router = new Router();

// Подключаем файл с роутами
require __DIR__ . '/routes/web.php'; // Убедись, что здесь корректный путь

// Обработка 404 ошибок
$router->set404(function () {
    http_response_code(404);
    echo json_encode(['error' => 'Not Found']);
});

// Обработка глобальных ошибок
set_exception_handler(function ($exception) {
    http_response_code(500);
    echo json_encode(['error' => $exception->getMessage()]);
});

// Запуск роутера
$router->run();
