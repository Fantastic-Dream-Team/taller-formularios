<?php
// Variables para almacenar el feedback de cada método
$feedback_get = "";
$feedback_post = "";

// Lógica para procesar GET (Taller 1)
if (isset($_GET['enviar_get'])) {
    $nombre = htmlspecialchars($_GET['nombre'] ?? ''); // Sanitización contra XSS
    $email = filter_var($_GET['email'] ?? '', FILTER_VALIDATE_EMAIL); // Validación de formato
    
    if (empty($nombre) || !$email) {
        $feedback_get = "<div class='alert alert-danger mt-3'>❌ GET: Datos inválidos.</div>";
    } else {
        $feedback_get = "<div class='alert alert-info mt-3'>🔍 <strong>GET Recibido:</strong> $nombre ($email)</div>";
    }
}

// Lógica para procesar POST (Taller 2)
if (isset($_POST['enviar_post'])) {
    $nombre = htmlspecialchars($_POST['nombre'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $pass  = $_POST['password'] ?? '';
    $pass2 = $_POST['confirm_password'] ?? '';
    
    if (empty($nombre) || !$email || empty($pass)) {
        $feedback_post = "<div class='alert alert-danger mt-3'>❌ POST: Campos obligatorios vacíos.</div>[cite: 5]";
    } elseif ($pass !== $pass2) {
        $feedback_post = "<div class='alert alert-warning mt-3'>⚠️ Las contraseñas no coinciden.</div>";
    } else {
        $feedback_post = "<div class='alert alert-success mt-3'>✅ <strong>POST Validado:</strong> Listo para el Módulo 5.</div>";
    }
}
?>