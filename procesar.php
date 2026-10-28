<?php
// procesar.php - Recibe el POST, valida, guarda en sesión y redirige (302)
require __DIR__ . '/config.php';

// Solo se permite POST; cualquier otro método devuelve 405
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    echo '<h1>405 Method Not Allowed</h1><p>Use el formulario (POST).</p>';
    exit;
}

// Validación y saneamiento con filter_input()
$nombre  = trim((string) filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS));
$email   = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$mensaje = trim((string) filter_input(INPUT_POST, 'mensaje', FILTER_SANITIZE_SPECIAL_CHARS));

$errores = [];
if ($nombre === '')                      $errores[] = 'El nombre es obligatorio.';
if ($email === false || $email === null) $errores[] = 'El correo no es válido.';
if ($mensaje === '')                     $errores[] = 'El mensaje es obligatorio.';

if ($errores) {
    http_response_code(400);
    echo '<h1>400 - Datos inválidos</h1><ul>';
    foreach ($errores as $err) echo '<li>' . e($err) . '</li>';
    echo '</ul><a href="index.html">Volver</a>';
    exit;
}

// Manejo de sesión: guardamos datos y contamos envíos
$_SESSION['datos']  = ['nombre' => $nombre, 'email' => $email, 'mensaje' => $mensaje];
$_SESSION['envios'] = ($_SESSION['envios'] ?? 0) + 1;

// Patrón Post/Redirect/Get -> 302
header('Location: resultado.php', true, 302);
exit;
