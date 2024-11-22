<?php

namespace App\Middlewares;

use Firebase\JWT\JWT;
use Exception;

class AuthMiddleware
{
    public function handle()
    {
        $headers = getallheaders();
        if (!isset($headers['Authorization'])) {
            http_response_code(401);
            echo json_encode(['error' => 'Authorization header not found']);
            return;
        }

        $authHeader = $headers['Authorization'];
        list($jwt) = sscanf($authHeader, 'Bearer %s');

        if (!$jwt) {
            http_response_code(401);
            echo json_encode(['error' => 'Invalid token']);
            return;
        }

        try {
            $headers1 = ['HS256'];
            $decoded = JWT::decode($jwt, $_ENV['JWT_SECRET'], $headers1);
            // Сохранение user_id для дальнейшего использования
            $_SESSION['user_id'] = $decoded->user_id;  // Пример сессии
        } catch (Exception $e) {
            http_response_code(401);
            echo json_encode(['error' => 'Invalid or expired token']);
        }
    }
}


