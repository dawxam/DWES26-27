<?php
require 'cabecera.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página 2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="container py-5">
            <div class="card shadow p-4">
                <h1 class="mb-3">Bienvenido a la Página 2</h1>
                <p class="text-muted">Este es el contenido exclusivo de la segunda sección.</p>
                
                <nav class="mb-4">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link" href="index.php">Volver al Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="pag1.php">Ir a la Página 1</a></li>
                        <li class="nav-item"><a class="nav-link active" href="pag2.php">Página 2</a></li>
                    </ul>
                </nav>

                <div>
                    <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>