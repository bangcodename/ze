<?php
// ZettBOT Config - Database MySQL
$host = 'localhost';
$db   = 'db_zeff_26';
$user = 'USER_DATABASE_KAMU'; // Ganti dengan username database di Cyberpanel
$pass = 'PASSWORD_DATABASE_KAMU'; // Ganti dengan password database di Cyberpanel
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>