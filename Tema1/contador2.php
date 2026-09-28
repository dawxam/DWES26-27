<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Contadores</h2>
    <div id="contenedor">
        <p>Este contador va del 0 al 100:</p>

        <p class="parrafo"><?php
            for ($i = 0; $i < 100; $i++) {
                echo $i . ",";
            }
        ?></p>

        <p>Este otro va del 10 al 0</p>

        <p class="parrafo"><?php
            $j = 11;

            while ($j >= 0) {
                echo $j . "-";
                --$j;
            }
        ?></p>
    </div>
</body>
</html>