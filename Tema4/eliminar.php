<?php
    include 'conexion.php';    
    
    try {
        $sql = "DELETE FROM videojuego WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id' => 2]);
        echo "Videojuego borrado con éxito.";
    } catch (\PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>