<?php
    include 'conexion.php';    
    
    $mensaje = "";
    $tipoAlerta = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titulo = $_POST['titulo'] ?? '';
        $genero = $_POST['genero'] ?? '';
        $precio = $_POST['precio'] ?? '';

        if (!empty($titulo) && !empty($genero) && !empty($precio)) {
            try {
                $insercion = $pdo->prepare("INSERT INTO videojuego (titulo, genero, precio) VALUES (?, ?, ?)");
                $videojuego = array($titulo, $genero, $precio);
                $insercion->execute($videojuego);

                $mensaje = "¡Videojuego insertado correctamente!";
                $tipoAlerta = "success";
            } catch (PDOException $e) {
                $mensaje = "Error al insertar: " . $e->getMessage();
                $tipoAlerta = "danger";
            }
        } else {
            $mensaje = "Por favor, completa todos los campos.";
            $tipoAlerta = "warning";
        }
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Videojuego</title>
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
                <div class="card shadow">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0">Añadir Nuevo Videojuego</h4>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($mensaje)): ?>
                            <div class="alert alert-<?php echo $tipoAlerta; ?> alert-dismissible fade show" role="alert">
                                <?php echo $mensaje; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título del Videojuego:</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required placeholder="Ej: Done to Zen">
                            </div>

                            <div class="mb-3">
                                <label for="genero" class="form-label">Género:</label>
                                <input type="text" class="form-control" id="genero" name="genero" required placeholder="Ej: Bélica">
                            </div>

                            <div class="mb-3">
                                <label for="precio" class="form-label">Precio (€):</label>
                                <input type="number" step="0.01" class="form-control" id="precio" name="precio" required placeholder="Ej: 23.60">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-success">Guardar Videojuego</button>
                                <a href="listar.php" class="btn btn-outline-secondary">Ver lista de videojuegos</a>
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