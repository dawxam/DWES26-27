<?php
    include 'conexion.php';    

    try {
        $sql = "UPDATE videojuego SET titulo = :titulo WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['titulo' => 'Bayonetta', 'id' => 3]);
        echo "Videojuego actualizado con éxito.";
    } catch (\PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>