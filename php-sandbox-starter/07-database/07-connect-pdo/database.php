<?php

$host = 'localhost';
$port = 5431;
$dbName = 'postgres';
$username = 'postgres';
$password = '12345';

$dsn = "pgsql:host={$host};port={$port};dbname={$dbName}";

try {
    $pdo = new PDO($dsn, $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Database connected';
} catch (PDOException $e) {
    echo 'Connection Failed: ' . $e->getMessage();
}