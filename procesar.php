<?php
// ============================================================
// INTEGRANTE 3 - Gestor de Recepción y Servidor
// Archivo: procesar.php
// ============================================================

echo "<!DOCTYPE html>";
echo "<html lang='es'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Receptor de Formularios - Integrante 3</title>";
echo "<style>
    body { font-family: Arial, sans-serif; margin: 20px; background: #f5f5f5; }
    h1 { color: #2c3e50; }
    h2 { color: #2980b9; border-bottom: 2px solid #3498db; padding-bottom: 5px; }
    pre { background: #2c3e50; color: #ecf0f1; padding: 15px; border-radius: 8px; overflow-x: auto; }
    .container { max-width: 1200px; margin: 0 auto; }
    .card { background: white; padding: 20px; margin: 20px 0; border-radius: 10px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    ul { background: #ecf0f1; padding: 15px; border-radius: 8px; }
    li { margin: 10px 0; }
</style>";
echo "</head>";
echo "<body>";
echo "<div class='container'>";

echo "<h1>🔄 INTEGRANTE 3 - Gestor de Recepción y Servidor</h1>";

// ============================================================
// 1. MOSTRAR $_GET (datos enviados por URL)
// ============================================================
echo "<div class='card'>";
echo "<h2>📩 1. Contenido de \$_GET</h2>";
echo "<p><strong>Qué es:</strong> Array que contiene los datos enviados por <code>method='GET'</code>.
      Los datos aparecen en la barra de direcciones del navegador.</p>";
echo "<pre>";
var_dump($_GET);
echo "</pre>";
echo "</div>";

// ============================================================
// 2. MOSTRAR $_POST (datos enviados en cuerpo HTTP)
// ============================================================
echo "<div class='card'>";
echo "<h2>📮 2. Contenido de \$_POST</h2>";
echo "<p><strong>Qué es:</strong> Array que contiene los datos enviados por <code>method='POST'</code>.
      Los datos NO son visibles en la barra de direcciones.</p>";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
echo "</div>";

// ============================================================
// 3. MOSTRAR $_REQUEST (combinación GET + POST + COOKIE)
// ============================================================
echo "<div class='card'>";
echo "<h2>🔄 3. Contenido de \$_REQUEST (combinado)</h2>";
echo "<p><strong>Qué es:</strong> Array que combina <code>\$_GET</code>, <code>\$_POST</code> y <code>\$_COOKIE</code>.
      Útil para procesar datos sin importar cómo llegaron.</p>";
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";
echo "</div>";

// ============================================================
// 4. MOSTRAR INFORMACIÓN DE $_SERVER
// ============================================================
echo "<div class='card'>";
echo "<h2>🖥️ 4. Información del Servidor (\$_SERVER)</h2>";
echo "<p><strong>Qué es:</strong> Array que contiene información del entorno del servidor y la ejecución actual.</p>";
echo "<ul>";
echo "<li><strong>PHP_SELF:</strong> " . htmlspecialchars($_SERVER['PHP_SELF'] ?? 'No disponible') . "</li>";
echo "<li><strong>REQUEST_METHOD:</strong> " . htmlspecialchars($_SERVER['REQUEST_METHOD'] ?? 'No disponible') . "</li>";
echo "<li><strong>SERVER_SOFTWARE:</strong> " . htmlspecialchars($_SERVER['SERVER_SOFTWARE'] ?? 'No disponible') . "</li>";
echo "<li><strong>REMOTE_ADDR:</strong> " . htmlspecialchars($_SERVER['REMOTE_ADDR'] ?? 'No disponible') . "</li>";
echo "<li><strong>HTTP_USER_AGENT:</strong> " . htmlspecialchars($_SERVER['HTTP_USER_AGENT'] ?? 'No disponible') . "</li>";
echo "</ul>";
echo "</div>";

// ============================================================
// 5. RESUMEN DE QUÉ MÉTODO SE USÓ
// ============================================================
echo "<div class='card'>";
echo "<h2>📊 5. Resumen de la Petición</h2>";
$metodo = $_SERVER['REQUEST_METHOD'] ?? 'No definido';
echo "<p><strong>Método HTTP usado:</strong> <code>" . htmlspecialchars($metodo) . "</code></p>";

if ($metodo === 'GET' && !empty($_GET)) {
    echo "<p>✅ Se recibieron datos por <strong>GET</strong>. Los datos están visibles en la URL.</p>";
} elseif ($metodo === 'POST' && !empty($_POST)) {
    echo "<p>✅ Se recibieron datos por <strong>POST</strong>. Los datos NO son visibles en la URL.</p>";
} elseif ($metodo === 'GET' && empty($_GET)) {
    echo "<p>⚠️ Se accedió por GET pero no se enviaron datos (acceso directo al archivo).</p>";
} elseif ($metodo === 'POST' && empty($_POST)) {
    echo "<p>⚠️ Se accedió por POST pero no se enviaron datos.</p>";
}
echo "</div>";

echo "</div>"; // cierre container
echo "</body>";
echo "</html>";
?>