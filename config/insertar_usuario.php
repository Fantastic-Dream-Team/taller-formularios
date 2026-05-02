<?php
// ============================================================
//  insertar_usuario.php  –  Consultas Preparadas
//
//  Demuestra cómo usar PDO con marcadores de nombre (:nombre,
//  :email, :password) para insertar un usuario de forma segura.
// ============================================================

require_once 'conexion.php'; 

/**
 * Inserta un nuevo usuario en la tabla `usuarios`.
 *
 * @param  PDO    $pdo       Objeto de conexión 
 * @param  string $nombre    Nombre ya sanitizado con htmlspecialchars()
 * @param  string $email     Email ya validado con filter_var()
 * @param  string $password  Hash generado con password_hash()
 * @return bool              true si se insertó, false si el email ya existe
 */
function insertarUsuario(PDO $pdo, string $nombre, string $email, string $password): bool
{
    // --- CONSULTA PREPARADA ---------------------------------
    // Los marcadores :nombre, :email y :password son marcadores
    // de nombre. PDO los reemplaza de forma segura DESPUÉS de
    // preparar el plan de ejecución, lo que hace imposible la
    // inyección SQL.
    $sql = "INSERT INTO usuarios (nombre, email, password)
            VALUES (:nombre, :email, :password)";

    // prepare() compila la consulta sin datos → plan seguro
    $stmt = $pdo->prepare($sql);

    try {
        // execute() vincula y envía los valores reales
        $stmt->execute([
            ':nombre'   => $nombre,
            ':email'    => $email,
            ':password' => $password,   // En este punto, ya es un hash, no un texto plano
        ]);
        return true; // Inserción exitosa

    } catch (PDOException $e) {
        // Código 23000 = violación de restricción UNIQUE (email duplicado)
        if ($e->getCode() === '23000') {
            return false; // El email ya existe en la BD
        }
        // Cualquier otro error sí es inesperado → relanzar
        throw $e;
    }
}