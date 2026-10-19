<?php
    include 'conexion.php';    
    
    $mensaje = "";
    $tipoAlerta = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombreAntiguo = trim($_POST['nombre_antiguo'] ?? '');
        $nuevoTitulo = trim($_POST['nuevo_titulo'] ?? '');
        $nuevoGenero = trim($_POST['nuevo_genero'] ?? '');
        $nuevoPrecio = $_POST['nuevo_precio'] ?? '';

        if (!empty($nombreAntiguo) && !empty($nuevoTitulo)) {
            try {
                $sql = "UPDATE videojuego SET titulo = :nuevo_titulo, genero = :nuevo_genero, precio = :nuevo_precio WHERE titulo = :nombre_antiguo";
                $stmt = $pdo->prepare($sql);
                $stmt->execute([
                    'nuevo_titulo' => $nuevoTitulo,
                    'nuevo_genero' => $nuevoGenero,
                    'nuevo_precio' => $nuevoPrecio,
                    'nombre_antiguo' => $nombreAntiguo
                ]);

                if ($stmt->rowCount() > 0) {
                    $mensaje = "Videojuego actualizado con éxito.";
                    $tipoAlerta = "success";
                } else {
                    $mensaje = "No se encontró ningún videojuego con ese nombre exacto o los datos eran idénticos.";
                    $tipoAlerta = "warning";
                }

            } catch (\PDOException $e) {
                $mensaje = "Error: " . $e->getMessage();
                $tipoAlerta = "danger";
            }
        } else {
            $mensaje = "Por favor, introduce al menos el nombre actual y el nuevo título.";
            $tipoAlerta = "warning";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Videojuego</title>
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow border-pink">
                    <div class="card-header bg-pink text-white">
                        <h4 class="mb-0">Actualizar Videojuego por Nombre</h4>
                    </div>
                    <div class="card-body">

                        <?php if (!empty($mensaje)): ?>
                            <div class="alert alert-<?php echo $tipoAlerta; ?> alert-dismissible fade show" role="alert">
                                <?php echo $mensaje; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <p class="text-muted">Introduce el nombre actual del videojuego que deseas buscar y los nuevos datos:</p>

                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="nombre_antiguo" class="form-label">Nombre actual (a buscar):</label>
                                <input type="text" class="form-control" id="nombre_antiguo" name="nombre_antiguo" required placeholder="Ej: Done to Zen">
                            </div>

                            <hr>

                            <div class="mb-3">
                                <label for="nuevo_titulo" class="form-label">Nuevo Título:</label>
                                <input type="text" class="form-control" id="nuevo_titulo" name="nuevo_titulo" required placeholder="Ej: Bayonetta">
                            </div>

                            <div class="mb-3">
                                <label for="nuevo_genero" class="form-label">Nuevo Género:</label>
                                <input type="text" class="form-control" id="nuevo_genero" name="nuevo_genero" required placeholder="Ej: Acción">
                            </div>

                            <div class="mb-3">
                                <label for="nuevo_precio" class="form-label">Nuevo Precio (€):</label>
                                <input type="number" step="0.01" class="form-control" id="nuevo_precio" name="nuevo_precio" required placeholder="Ej: 29.99">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-pink">Actualizar Videojuego</button>
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