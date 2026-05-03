<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Taller Formularios - Integrante 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f4f4f4;
        }
        .formulario {
            background: white;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #333333;
        }
        input, button {
            display: block;
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            font-size: 16px;
            box-sizing: border-box;
        }
        button {
            background: #0074f0;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .url-demo {
            background: #e9ecef;
            padding: 10px;
            font-family: monospace;
            margin-top: 20px;
            border-radius: 5px;
        }
        .info {
            background: #d4edda;
            border-left: 4px solid #28a745;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="info">
        <strong>📌 Integrante 2:</strong> Demostración de GET vs POST
    </div>

    <h1>📋 Taller de Formularios</h1>
    
    <!-- FORMULARIO 1: MÉTODO GET -->
    <div class="formulario">
        <h2>🔵 FORMULARIO CON METHOD="GET"</h2>
        <p><strong>Característica:</strong> Los datos aparecen EN LA BARRA DE DIRECCIONES</p>
        <p><small>⚠️ No usar para contraseñas o datos sensibles</small></p>
        
        <form action="procesar.php" method="get">
            <input type="text" name="nombre" placeholder="Nombre completo" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit" name="submit_get">📤 Enviar con GET</button>
        </form>
        
        <div class="url-demo">
            <strong>🔗 Ejemplo de URL después de enviar:</strong><br>
            <code>procesar.php?nombre=Juan+Perez&email=juan%40mail.com&password=123456</code>
        </div>
    </div>

    <!-- FORMULARIO 2: MÉTODO POST -->
    <div class="formulario">
        <h2>🟢 FORMULARIO CON METHOD="POST"</h2>
        <p><strong>Característica:</strong> Los datos NO SE VEN en la URL, van en el cuerpo de la petición</p>
        <p><small>✅ Recomendado para contraseñas y datos personales</small></p>
        
        <form action="procesar.php" method="post">
            <input type="text" name="nombre" placeholder="Nombre completo" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit" name="submit_post">📥 Enviar con POST</button>
        </form>
        
        <div class="url-demo">
            <strong>🔗 Ejemplo de URL después de enviar:</strong><br>
            <code>procesar.php</code> (sin datos visibles)
        </div>
    </div>

    <div class="url-demo">
        <h3>📚 Términos clave que debes explicar:</h3>
        <ul>
            <li><strong>action="procesar.php"</strong> → Los datos se envían a ese archivo</li>
            <li><strong>name="nombre"</strong> → PHP usa esto para acceder al dato: <code>$_GET['nombre']</code></li>
            <li><strong>method="get"</strong> → Datos visibles en URL (menos seguro)</li>
            <li><strong>method="post"</strong> → Datos ocultos en cuerpo (más seguro)</li>
            <li><strong>type="submit"</strong> → Botón que dispara el envío</li>
        </ul>
    </div>
</body>
</html>