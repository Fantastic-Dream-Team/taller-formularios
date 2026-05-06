<?php
// procesar.php - Versión corregida con rutas absolutas
require_once __DIR__ . '/../config/GestorSeguridad.php';

$seguridad = new GestorSeguridad();

$feedback_get = "";
$feedback_post = "";

// ====================== PROCESAR GET ======================
if (isset($_GET['submit_get']) || isset($_GET['enviar_get'])) {
    $nombre = htmlspecialchars($_GET['nombre'] ?? ''); 
    $email  = filter_var($_GET['email'] ?? '', FILTER_VALIDATE_EMAIL); 
    
    if (empty($nombre) || !$email) {
        $feedback_get = "<div class='alert alert-danger mt-3'>❌ GET: Datos inválidos.</div>";
    } else {
        $feedback_get = "<div class='alert alert-info mt-3'>🔍 GET Recibido: $nombre ($email)</div>";
    }
}

// ====================== PROCESAR POST ======================
if (isset($_POST['submit_post'])) {
    // 1. Validación CSRF
    if (!$seguridad->validarCsrfToken($_POST['csrf_token'] ?? '')) {
        $feedback_post = "<div class='alert alert-danger mt-3'>🚫 Error: Token CSRF inválido.</div>";
    } else {
        $nombre = htmlspecialchars($_POST['nombre'] ?? '');
        $email  = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
        $pass   = $_POST['password'] ?? '';
        $pass2  = $_POST['confirm_password'] ?? '';
        
        if (empty($nombre) || !$email || empty($pass) || empty($pass2)) {
            $feedback_post = "<div class='alert alert-danger mt-3'>❌ Campos obligatorios vacíos.</div>";
        } elseif ($pass !== $pass2) {
            $feedback_post = "<div class='alert alert-warning mt-3'>⚠️ Las contraseñas no coinciden.</div>";
        } else {
            $hashed_password = $seguridad->hashearPassword($pass);
            
            // === RUTAS CORREGIDAS ===
            require_once __DIR__ . '/../config/conexion.php';
            require_once __DIR__ . '/../config/insertar_usuario.php';
            
            try {
                if (insertarUsuario($pdo, $nombre, $email, $hashed_password)) {
                    $metodo = $_SERVER['REQUEST_METHOD'];
                    $ip = $_SERVER['REMOTE_ADDR'];
                    
                    $feedback_post = "<div class='alert alert-success mt-3'>
                        ✅ Usuario Registrado correctamente.<br>
                        🔒 Hash: " . substr($hashed_password, 0, 20) . "...<br>
                        📡 $metodo desde IP: $ip
                    </div>";
                } else {
                    $feedback_post = "<div class='alert alert-danger mt-3'>❌ El email ya existe en el sistema.</div>";
                }
            } catch (Exception $e) {
                $feedback_post = "<div class='alert alert-danger mt-3'>❌ Error: " . htmlspecialchars($e->getMessage()) . "</div>";
            }
        }
    }
}
?>