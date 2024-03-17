<?php

define('DB_HOST', 'localhost'); // Или адрес вашего сервера PostgreSQL
define('DB_USER', 'review_user');
define('DB_PASS', 'your_password');
define('DB_NAME', 'movie_reviews');

// Функция для подключения к базе данных
function connectDB() {
    $conn = new PDO("pgsql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    // Установка атрибутов для PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}

?>