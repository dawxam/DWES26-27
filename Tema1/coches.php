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
    $coches = array(
        '1111BCD' => array('Ford', 'Focus', 5),
        '1234ABC' => array('Seat', 'Ibiza', 3),
        '2678DEF' => array('Seat', 'Leon', 3),
        '8462GHI' => array('Mazda', 'CX-30', 5)
    );

    ksort($coches);
    ?>

    <div id="contenedor">
        <h1>Listado de Coches</h1>

        <h2>Listado de Coches Ordenados por Matrícula</h2>
        
        <ul style="list-style-type: none;">
            <?php foreach ($coches as $matricula => $datos): ?>
                <li>
                    <strong>Matrícula:</strong> <?php echo $matricula; ?><br>
                    <strong>Marca:</strong> <?php echo $datos[0]; ?><br>
                    <strong>Modelo:</strong> <?php echo $datos[1]; ?><br>
                    <strong>Puertas:</strong> <?php echo $datos[2]; ?>
                </li><br>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>