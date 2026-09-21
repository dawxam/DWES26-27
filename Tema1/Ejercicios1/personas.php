<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
            $personas = array(
                array('nombre' => 'Aitor', 'altura' => 182, 'email' => 'aitor@correo.com'),
                array('nombre' => 'María', 'altura' => 165, 'email' => 'maria@correo.com'),
                array('nombre' => 'Carlos', 'altura' => 175, 'email' => 'carlos@correo.com'),
                array('nombre' => 'Elena', 'altura' => 170, 'email' => 'elena@correo.com'),
                array('nombre' => 'David', 'altura' => 188, 'email' => 'david@correo.com')
                );
                ?>

    <div id="contenedor">
        <h2>Lista de Personas</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Altura (cm)</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($personas as $persona): ?>
                    <tr>
                        <td><?php echo $persona['nombre']; ?></td>
                        <td><?php echo $persona['altura']; ?></td>
                        <td><?php echo $persona['email']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>