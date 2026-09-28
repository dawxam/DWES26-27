<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Página de prueba en PHP</h2>

    <?php
        $nombre = "Xavi Antunez";
        $anyo = 1999;
    ?>
    <p>Me llamo <?php echo $nombre; ?> y nací en el año <?php echo $anyo; ?>.</p>
</body>
</html>