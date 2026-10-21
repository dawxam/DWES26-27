<!-- videojuego_view.php -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Catálogo de Videojuegos</title>
        <style>
            body { font-family: Arial, sans-serif; margin: 30px; }
            table { border-collapse: collapse; width: 100%; margin-top: 20px;
            }
            th, td { border: 1px solid #ddd; padding: 10px; text-align: left;
            }
            th { background-color: #f4f4f4; }
            .alerta { padding: 10px; background-color: #e2f0d9; color:
            #385723; margin-bottom: 20px; border-radius: 4px; }
            .formulario { background: #f9f9f9; padding: 20px; border-radius: 5
            px; margin-bottom: 30px; border: 1px solid #eee; }
            .campo { margin-bottom: 10px; }
            label { display: inline-block; width: 80px; }
        </style>
    </head>
    <body>
        <h1>Gestión de Videojuegos</h1>
        <!-- Si el controlador nos envía un mensaje, lo mostramos -->
        <?php if (!empty($mensaje)): ?>
        <div class="alerta"><?php echo htmlspecialchars($mensaje); ?></div>
        <?php endif; ?>
        <!-- Formulario para añadir nuevos registros -->
        <div class="formulario">
        <h3>Añadir Nuevo Videojuego</h3>
        <form action="index.php" method="POST">
        <div class="campo">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="campo">
        <label for="genero">Género:</label>
        <input type="text" id="genero" name="genero" required>
        </div>
        <div class="campo">
        <label for="precio">Precio €():</label>
        <input type="number" id="precio" name="precio" step="0.01"
        required>
        </div>
        <button type="submit">Guardar Videojuego</button>
        </form>
        </div>
        <!-- Tabla que lista los videojuegos que nos mandó el controlador -->
        <h2>Listado Actual</h2>
        <?php if (!empty($videojuegos)): ?>
        <table>
        <thead>
        <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Género</th>
        <th>Precio</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($videojuegos as $juego): ?>
        <tr>
        <td><?php echo htmlspecialchars($juego['id'] ?? ''
        ); ?></td>
        <td><?php echo htmlspecialchars($juego['titulo']);
        ?></td>
        <td><?php echo htmlspecialchars($juego['genero']);
        ?></td>
        <td><?php echo htmlspecialchars($juego['precio']);
        ?> €</td>
        </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
        <?php else: ?>
        <p>No hay videojuegos registrados en el sistema.</p>
        <?php endif; ?>
    </body>
</html>