<?php

namespace App\Services;

use App\Models\User;
use Firebase\JWT\JWT;

class AuthService {
    // Регистрация пользователя
    public function register($data) {
        $password = password_hash($data['password'], PASSWORD_BCRYPT);
        $user = new User();
        $user->email = $data['email'];
        $user->password = $password;
        $user->save();
    }

    // Логин пользователя и создание JWT токена
    public function login($data) {
        // Находим пользователя по email
        $user = User::findByEmail($data['email']);

        // Если пользователь не найден или пароль неверный
        if (!$user || !password_verify($data['password'], $user->password)) {
            throw new \Exception('Invalid credentials');
        }

        // Генерация JWT токена
        $payload = [
            'user_id' => $user->id,
            'exp' => time() + 3600  // Токен истечет через 1 час
        ];

        // Получаем секретный ключ из переменных окружения
        $key = $_ENV['JWT_SECRET'];

        // Создаем и возвращаем JWT токен
        return JWT::encode($payload, $key, 'HS256');
    }
}
