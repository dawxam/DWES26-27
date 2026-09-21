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
            function intercambia($a, $b) {
                echo "Antes de cambiar el orden: a = $a, b = $b <br>";
                $temp = $a;
                $a = $b;
                $b = $temp;
                echo "Después de cambiar el orden: a = $a, b = $b <br>";
            }
            intercambia(10, 20)
        ?>
    </div>
</body>
</html>