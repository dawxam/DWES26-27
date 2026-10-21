<?php
    if(isset($_COOKIE["nombre"])){
        $nombre = $_COOKIE["nombre"];
        $valor = $_COOKIE["color"]; 
    } else {
        $valor = "#ffffff"; 
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Fondo mediante Cookie</title>
    </head>
    <?php if (isset($_COOKIE['color'])): ?>
    <body style="background-color: <?php echo htmlspecialchars($valor); ?>;">
            <p>Bienvenido, <?php echo htmlspecialchars($nombre); ?></p>
            <a href="borrar_prefs.php">Borrar preferencias</a>
            <?php else: ?>
            <p>Página de inicio.</p>
        <?php endif; ?>
    </body>
</html>