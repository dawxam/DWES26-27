<?php
    include 'conexion.php';    
    
    $consulta = $pdo->prepare("SELECT * FROM videojuego");
    $consulta -> setFetchMode(PDO::FETCH_ASSOC);
    $consulta->execute();

    while($registro = $consulta->fetch())
    {
    echo $registro['titulo']."<br>";
    }
?>