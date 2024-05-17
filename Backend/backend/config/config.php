<?php
// backend/config/config.php

// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'Usr_linces');
define('DB_PASS', 'l1nc3s_2024T1');
define('DB_NAME', 'Linces');

// Tokens
define('TOKEN_GET', 'Bearer get');
define('TOKEN_GET_EVALUACION', 'Bearer ciisa');
define('TOKEN_POST', 'Bearer post');
define('TOKEN_PUT', 'Bearer put');
define('TOKEN_PATCH', 'Bearer patch');
define('TOKEN_DELETE', 'Bearer delete');
define('TOKEN_DELETE_WEB', 'Bearer delete');
define('TOKEN_DELETE_EMPRESA1', 'Bearer delete');
define('TOKEN_DELETE_EMPRESA2', 'Bearer delete');

// Configuración PDO
$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
