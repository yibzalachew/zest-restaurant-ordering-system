<?php
declare(strict_types=1);

$localConfig = __DIR__ . '/database.local.php';

if (file_exists($localConfig)) {
    $dbConfig = require $localConfig;

    if (!is_array($dbConfig)) {
        throw new RuntimeException('Invalid local database configuration.');
    }

    $host = $dbConfig['host'] ?? '';
    $dbname = $dbConfig['dbname'] ?? '';
    $username = $dbConfig['username'] ?? '';
    $password = $dbConfig['password'] ?? '';

} else {
    // Production hosting credentials.
    $host = getenv('DB_HOST') ?: '';
    $dbname = getenv('DB_NAME') ?: '';
    $username = getenv('DB_USER') ?: '';
    $password = getenv('DB_PASSWORD') ?: '';
}

try {
    $pdo = new PDO(
        "mysql:host={$host};dbname={$dbname};charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_STRINGIFY_FETCHES => false
        ]
    );

} catch (PDOException $e) {
    error_log('[ZEST DATABASE ERROR] ' . $e->getMessage());

    http_response_code(500);

    exit('Database connection failed. Please try again later.');
}