<?php 
include 'procesar.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Taller 3: Formulario POST Seguro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container">
        <div class="card shadow mx-auto" style="max-width: 500px; border-top: 5px solid #4B0082;">
            <div class="card-header bg-white">
                <h5 class="mb-0 text-primary">Registro Seguro (CSRF + Hash)</h5>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($seguridad->generarCsrfToken()); ?>">
                    
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirmar Contraseña</label>
                        <input type="password" name="confirm_password" class="form-control" required>
                    </div>
                    <button type="submit" name="submit_post" class="btn btn-primary w-100">Registrar Usuario</button>
                </form>
                
                <div id="feedback">
                    <?php echo $feedback_post; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>