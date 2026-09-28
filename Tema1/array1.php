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
        <h1>Números Aleatorios</h1>

        <?php
        $numeros = array();
        $totalNumeros = 50;

        while (count($numeros) < $totalNumeros) {
            $num = rand(0, 99);
            
            if (!in_array($num, $numeros)) {
                $numeros[] = $num;
            }
        }

        sort($numeros);

        $mayor = max($numeros);
        $menor = min($numeros);
        $suma = array_sum($numeros);
        $media = $suma / count($numeros);
        ?>

        <div>
            <h2>Estadísticas</h2>
            <p><strong>Mayor:</strong> <?php echo $mayor; ?></p>
            <p><strong>Menor:</strong> <?php echo $menor; ?></p>
            <p><strong>Media:</strong> <?php echo number_format($media, 2); ?></p>
        </div>

        <h2>Lista de números ordenados</h2>
        <ul>
            <?php
            foreach ($numeros as $numero) {
                echo "<li>$numero</li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>