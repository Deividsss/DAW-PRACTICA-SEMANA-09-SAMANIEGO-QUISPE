<?php
// config.php - Configuración común del laboratorio 09
declare(strict_types=1);

define('APP_NAME', 'Lab 09 - PHP');

// Sesión con buenas prácticas básicas
ini_set('session.use_strict_mode', '1');
ini_set('session.cookie_httponly', '1');
session_start();

// Helper para escapar salida (previene XSS)
function e(string $valor): string {
    return htmlspecialchars($valor, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
