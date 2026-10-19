<?php
    $host = "localhost";
    $nombreBD = "videojuegos";
    $usuario = "root";
    $password = "";

    try {
        $pdo = new PDO(
        "mysql:host=$host;dbname=$nombreBD;charset=utf8mb4",
        $usuario,
        $password
    );

        // Hace que PDO lance excepciones cuando ocurre un error
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    }
?>