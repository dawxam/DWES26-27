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
    $nota1 = 4;
    $nota2 = 10;
    $nota3 = 8;


    if ($nota1 > $nota2 && $nota1 > $nota3) {
        echo $nota1;
    } else if ($nota2 > $nota1 && $nota2 > $nota3) {
        echo $nota2;
    } else if ($nota3 > $nota1 && $nota3 > $nota2) {
        echo $nota3;
    }
?>
</body>
</html>