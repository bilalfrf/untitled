<?php
$host = 'localhost';
$db   = 'auth_system';
$user = 'root'; // kendi kullanıcı adın
$pass = '';     // kendi şifren
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Veritabanı oluştur (eğer yoksa)
    $pdo->exec("CREATE DATABASE IF NOT EXISTS $db");
    $pdo->exec("USE $db");

    // Tabloları oluştur
    $pdo->exec("CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )");

} catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
    exit;
}
?>
