<?php include 'procesar.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema UTP - Registro Completo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        body { background-color: #f4f7f6; }
        .header-section {
            background: linear-gradient(135deg, #4B0082 0%, #6a11cb 100%);
            color: white; padding: 40px 0; margin-bottom: 40px; border-radius: 0 0 25px 25px;
        }
        .card { border-radius: 15px; border: none; }
    </style>
</head>
<body>

<header class="header-section text-center shadow">
    <div class="container">
        <h1 class="display-5 fw-bold">Desarrollo de Software VII</h1>
        <p class="lead">Módulos Independientes con Validación de Credenciales</p>
    </div>
</header>

<div class="container">
    <div class="row g-4 justify-content-center">
        
        <!-- FORMULARIO GET -->
        <div class="col-lg-5">
            <div class="card shadow-sm h-100">
                <div class="card-body p-4">
                    <h3 class="h5 mb-4 text-secondary"><i class="bi bi-search me-2"></i>Módulo GET</h3>
                    <form action="" method="get">
                        <div class="mb-3 text-start">
                            <label class="form-label small fw-bold">Nombre</label>
                            <input type="text" name="nombre" class="form-control">
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label small fw-bold">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <button type="submit" name="submit_get" class="btn btn-outline-secondary w-100 fw-bold">CONSULTAR</button>
                    </form>
                    <?php echo $feedback_get; ?>
                </div>
            </div>
        </div>

        <!-- FORMULARIO POST (CON CONFIRMACIÓN) -->
        <!-- FORMULARIO POST (CON CSRF) -->
<div class="col-lg-5">
    <div class="card shadow-sm h-100 border-top border-primary border-4">
        <div class="card-body p-4">
            <h3 class="h5 mb-4 text-primary"><i class="bi bi-person-plus-fill me-2"></i>Módulo POST</h3>
            <form action="" method="post">
                <!-- CAPTURA OBLIGATORIA: Campo oculto con el token CSRF[cite: 1] -->
                <input type="hidden" name="csrf_token" value="<?php echo $seguridad->generarCsrfToken(); ?>">
                
                <div class="mb-3 text-start">
                    <label class="form-label small fw-bold">Nombre</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>
                <div class="mb-3 text-start">
                    <label class="form-label small fw-bold">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3 text-start">
                    <label class="form-label small fw-bold">Contraseña</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="mb-4 text-start">
                    <label class="form-label small fw-bold">Confirmar Contraseña</label>
                    <input type="password" name="confirm_password" class="form-control" required>
                </div>
                <button type="submit" name="submit_post" class="btn btn-primary w-100 fw-bold shadow-sm">REGISTRAR USUARIO</button>
            </form>
            <?php echo $feedback_post; ?>
        </div>
    </div>
</div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>