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
            function conteo($a, $b) {
                for ($i = $a; $i <= $b; $i++) { 
                    echo $i . ", ";
                }
            }
            conteo(10, 20)
        ?>
    </div>
</body>
</html>