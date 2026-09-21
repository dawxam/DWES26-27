<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="contenedor">
        <?php
            $generos = array();
            $opciones = array('M', 'F');

            for ($i = 0; $i < 100; $i++) {
                $generos[] = $opciones[rand(0, 1)];
            }

            $conteo = array('M' => 0, 'F' => 0);

            foreach ($generos as $genero) {
                $conteo[$genero]++;
            }
        ?>

        <h2>Resultados del conteo</h2>
        <ul>
            <li><strong>M:</strong> <?php echo $conteo['M']; ?></li>
            <li><strong>F:</strong> <?php echo $conteo['F']; ?></li>
        </ul>
    </div>
</body>
</html>