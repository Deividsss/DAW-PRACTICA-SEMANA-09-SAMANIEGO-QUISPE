<?php
require __DIR__ . '/config.php';
$datos = $_SESSION['datos'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Resultado - PHP</title>
  <style>
    body{font-family:Segoe UI,Arial,sans-serif;background:#f3f5f9;padding:40px}
    .card{max-width:520px;margin:auto;background:#fff;padding:28px;border-radius:12px;box-shadow:0 4px 14px rgba(0,0,0,.1)}
    h1{color:#1f3a5f;font-size:22px;margin-top:0}
    td{padding:6px 12px 6px 0;vertical-align:top}
    .ok{color:#1a7f37;font-weight:600}
    .acciones{display:flex;gap:12px;flex-wrap:wrap;margin-top:22px}
    .btn{display:inline-block;text-decoration:none;padding:10px 18px;border-radius:6px;font-size:15px}
    .btn-sec{background:#e8edf5;color:#1f3a5f}
    .btn-pri{background:#1f6feb;color:#fff}
  </style>
</head>
<body>
<div class="card">
<?php if ($datos): ?>
  <h1 class="ok">✔ Datos recibidos por PHP</h1>
  <table>
    <tr><td><b>Nombre</b></td><td><?= e($datos['nombre']) ?></td></tr>
    <tr><td><b>Correo</b></td><td><?= e($datos['email']) ?></td></tr>
    <tr><td><b>Mensaje</b></td><td><?= e($datos['mensaje']) ?></td></tr>
    <tr><td><b>Envíos en esta sesión</b></td><td><?= (int) $_SESSION['envios'] ?></td></tr>
    <tr><td><b>ID de sesión</b></td><td><?= e(session_id()) ?></td></tr>
    <tr><td><b>Versión PHP</b></td><td><?= e(PHP_VERSION) ?></td></tr>
    <tr><td><b>Servidor</b></td><td><?= e($_SERVER['SERVER_SOFTWARE'] ?? 'N/D') ?></td></tr>
  </table>
<?php else: ?>
  <h1>No hay datos en la sesión</h1>
<?php endif; ?>
  <div class="acciones">
    <a class="btn btn-sec" href="index.html">← Enviar otro</a>
    <a class="btn btn-pri" href="comparativa.html">📊 Ver comparativa PHP vs JSP (Paso 5)</a>
  </div>
</div>
</body>
</html>
