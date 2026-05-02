<?php
// ============================================================
//  Lo incluyen con: require_once 'conexion.php';
// ============================================================

// --- Parámetros de conexión ---------------------------------
define('DB_HOST', 'localhost');   
define('DB_PORT', 3307); // El puerto por defecto de MySQL es 3306, coloqué el 3307 porque es el que tengo asignado yo; deben eliminar o comentar esta línea.
define('DB_NAME', 'taller_formularios'); 
define('DB_USER', 'root');        
define('DB_PASS', '');         
define('DB_CHARSET', 'utf8mb4'); 

// --- DSN (Data Source Name) ---------------------------------
$dsn = 'mysql:host=' . DB_HOST
     . ';port='     . DB_PORT // Esta tambien, la pueden eliminar o comentar si usan el puerto por defecto 3306
     . ';dbname='    . DB_NAME
     . ';charset='   . DB_CHARSET;

// --- Opciones del controlador PDO ---------------------------
$opciones = [
    // Lanza excepciones PDOException en lugar de errores silenciosos
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,

    // Devuelve filas como arrays asociativos por defecto (ej. $fila['nombre'])
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

    // Desactiva emulación de consultas preparadas → más seguro contra inyección SQL
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// --- Crear la conexión PDO ----------------------------------
try {
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $opciones);
    // Si llegamos aquí, la conexión fue exitosa.
    // La variable $pdo queda disponible para quien haga require_once de este archivo.

} catch (PDOException $e) {
    // Nunca mostrar el mensaje de error real al usuario final en producción.
    // Aquí lo mostramos en desarrollo para facilitar la depuración.
    die('❌ Error de conexión a la base de datos: ' . $e->getMessage());
}