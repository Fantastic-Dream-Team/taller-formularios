<?php 
// Incluimos la lógica del Módulo 3 y 4
include 'procesar.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Taller 1: Formulario GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <div class="card shadow mx-auto" style="max-width: 500px;">
            <div class="card-header bg-secondary text-white">
                <h5 class="mb-0">Formulario de Consulta (GET)</h5>
            </div>
            <div class="card-body">
                <form action="" method="get">
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <button type="submit" name="enviar_get" class="btn btn-secondary w-100">Probar GET</button>
                </form>
                <!-- Sección de Feedback Independiente -->
                <div id="feedback">
                    <?php echo $feedback_get; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>