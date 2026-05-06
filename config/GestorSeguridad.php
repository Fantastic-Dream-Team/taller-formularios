<?php
// GestorSeguridad.php
class GestorSeguridad {
    public function __construct() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    // Genera código aleatorio para asegurar que la petición viene de tu sitio
    public function generarCsrfToken() {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    // Valida que el token coincida
    public function validarCsrfToken($tokenRecibido) {
        return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $tokenRecibido);
    }

    // Convierte la clave en una cadena irreconocible
    public function hashearPassword($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    }
}