<?php

namespace App\Controllers;

use App\Services\AuthService;

class AuthController
{
    private $authService;

    public function __construct()
    {
        $this->authService = new AuthService();
    }

    // Регистрация пользователя
    public function register()
    {
        try {
            $data = json_decode(file_get_contents('php://input'), true);

            if (empty($data['email']) || empty($data['password']) || empty($data['username']) || empty($data['name'])) {
                http_response_code(400);
                echo json_encode(['error' => 'Email, password, username, and name are required']);
                return;
            }

            $user = new User();
            $user->email = $data['email'];
            $user->password = $data['password'];
            $user->username = $data['username'];
            $user->name = $data['name'];
            $user->save();

            echo json_encode(['message' => 'User registered successfully']);
        } catch (\Exception $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }


    // Логин пользователя
    public function login()
    {
        try {
            $data = json_decode(file_get_contents('php://input'), true);

            if (empty($data['username']) || empty($data['password'])) {
                http_response_code(400);
                echo json_encode(['error' => 'Username and password are required']);
                return;
            }

            $user = User::findByUsername($data['username']);
            if (!$user || !password_verify($data['password'], $user->password)) {
                http_response_code(401);
                echo json_encode(['error' => 'Invalid username or password']);
                return;
            }

            // Создаём JWT токен (добавь логику для генерации токена)
            $token = 'generate_token_here';
            echo json_encode(['token' => $token]);
        } catch (\Exception $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
    }


