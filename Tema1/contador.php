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

        <p class="parrafo"><?php
            for ($i = 0; $i < 100; $i++) {
                echo $i . ",";
            }
        ?></p>


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