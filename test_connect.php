<?php
$host = '127.0.0.1';
$db   = 'ecomerce';
$user = 'postgres';
$pass = '1234';

try {
    $pdo = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);
    echo "Kết nối thành công!";
} catch (PDOException $e) {
    die("Không thể kết nối. Lỗi: " . $e->getMessage());
}