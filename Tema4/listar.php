<?php
    include 'conexion.php';    
    
    $consulta = $pdo->prepare("SELECT * FROM videojuego");
    $consulta->setFetchMode(PDO::FETCH_ASSOC);
    $consulta->execute();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuegos</title>
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
            <div class="col-md-8">
                
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Listado de Videojuegos</h3>
                    </div>
                    <div class="card-body">
                        
                        <table class="table table-striped table-hover align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>Título</th>
                                    <th>Género</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($registro = $consulta->fetch()) { ?>
                                    <tr>
                                        <td><strong><?php echo $registro['titulo']; ?></strong></td>
                                        <td><span class="badge bg-secondary"><?php echo $registro['genero']; ?></span></td>
                                        <td><?php echo $registro['precio']; ?>€</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

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