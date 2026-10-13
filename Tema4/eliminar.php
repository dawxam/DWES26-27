<?php
    include 'conexion.php';    
    
    $mensaje = "";
    $tipoAlerta = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titulo = trim($_POST['titulo'] ?? '');

        if (!empty($titulo)) {
            try {
                $sql = "DELETE FROM videojuego WHERE titulo = :titulo";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['titulo' => $titulo]);

                if ($stmt->rowCount() > 0) {
                    $mensaje = "Videojuego '" . htmlspecialchars($titulo) . "' borrado con éxito.";
                    $tipoAlerta = "success";
                } else {
                    $mensaje = "No se encontró ningún videojuego con el título especificado.";
                    $tipoAlerta = "warning";
                }

            } catch (\PDOException $e) {
                $mensaje = "Error al eliminar: " . $e->getMessage();
                $tipoAlerta = "danger";
            }
        } else {
            $mensaje = "Por favor, introduce un título válido.";
            $tipoAlerta = "warning";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Videojuego</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6"> 
                <div class="card shadow border-danger">
                    <div class="card-header bg-danger text-white">
                        <h4 class="mb-0">Eliminar Videojuego por Nombre</h4>
                    </div>
                    <div class="card-body">

                        <?php if (!empty($mensaje)): ?>
                            <div class="alert alert-<?php echo $tipoAlerta; ?> alert-dismissible fade show" role="alert">
                                <?php echo $mensaje; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <p class="text-muted">Introduce el título exacto del videojuego que deseas eliminar de la base de datos:</p>

                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título del Videojuego:</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required placeholder="Ej: Done to Zen">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este videojuego?');">Eliminar Videojuego</button>
                                <a href="listar.php" class="btn btn-outline-secondary">Volver a la lista</a>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>
</body>
</html>