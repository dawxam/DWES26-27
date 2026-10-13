<?php
    include 'conexion.php';    
    
    $insercion = $pdo->prepare("INSERT INTO videojuego (titulo, genero, precio) VALUES (?, ?, ?)");

    $videojuego = array("Done to Zen", "Belica", 23.6);

    $insercion->execute($videojuego);

    echo "Videojuego insertado correctamente.";
?>