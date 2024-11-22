<?php

use Firebase\JWT\JWT;
use Dotenv\Dotenv;

require_once 'vendor/autoload.php';

// Загружаем переменные окружения из .env файла
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Секретный ключ для подписи JWT токенов
$jwtSecret = $_ENV['JWT_SECRET'];  // Берем ключ из .env

// Структура для токена (аналог Claims на Go)
class Claims {
    public $user_id;
    public $exp;

    public function __construct($user_id) {
        $this->user_id = $user_id;
        $this->exp = time() + 86400; // 24 часа
    }
}


// Генерация токена
function generateToken($userId) {
    global $jwtSecret;

    $claims = new Claims($userId);

    $payload = [
        'user_id' => $claims->user_id,
        'exp' => $claims->exp
    ];

    // Создаем JWT токен
    $token = JWT::encode($payload, $jwtSecret);

    return $token;
}


// Верификация токена
function verifyToken($token) {
    global $jwtSecret;

    try {
        $headers = ['HS256'];
        $decoded = JWT::decode($token, $jwtSecret, $headers);
        return (object)$decoded; // Возвращаем декодированный токен
    } catch (Exception $e) {
        return null; // Токен невалиден
    }
}

// Устанавливаем JWT токен в cookie
function setJWTCookie($userId) {
    $token = generateToken($userId);

    setcookie("user_id", $token, time() + 86400, "/", "", false, true);  // HttpOnly, Secure зависит от настроек

    return $token;
}

// Пример использования
$userId = '12345'; // Пример ID пользователя
$token = setJWTCookie($userId);
echo "JWT токен: " . $token;
