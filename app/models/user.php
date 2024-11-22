<?php

namespace App\Models;

use PDO;

class User
{
    public $id;
    public $email;
    public $password;
    public $username;
    public $name;

    public static function find($id)
    {
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT * FROM users WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetchObject(self::class);
    }

    public static function findByUsername($username)
    {
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->execute(['username' => $username]);
        return $stmt->fetchObject(self::class);
    }

    public static function findByEmail($email)
    {
        $db = self::getConnection();
        $stmt = $db->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->execute(['email' => $email]);
        return $stmt->fetchObject(self::class);
    }

    public function save()
    {
        $db = self::getConnection();

        // Если пароль не был хэширован, хэшируем его
        if (!password_get_info($this->password)['algo']) {
            $this->password = password_hash($this->password, PASSWORD_BCRYPT);
        }

        if ($this->id) {
            // Обновление существующего пользователя
            $stmt = $db->prepare('
                UPDATE users 
                SET email = :email, password = :password, username = :username, name = :name 
                WHERE id = :id
            ');
            $stmt->execute([
                'email' => $this->email,
                'password' => $this->password,
                'username' => $this->username,
                'name' => $this->name,
                'id' => $this->id,
            ]);
        } else {
            // Вставка нового пользователя
            $stmt = $db->prepare('
                INSERT INTO users (email, password, username, name) 
                VALUES (:email, :password, :username, :name)
            ');
            $stmt->execute([
                'email' => $this->email,
                'password' => $this->password,
                'username' => $this->username,
                'name' => $this->name,
            ]);
            $this->id = $db->lastInsertId();
        }
    }

    private static function getConnection()
    {
        $config = include __DIR__ . '/../../config/database.php';
        try {
            $pdo = new PDO($config['dsn'], $config['username'], $config['password']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            die('Database connection failed, please try again later.');
        }
    }
}
