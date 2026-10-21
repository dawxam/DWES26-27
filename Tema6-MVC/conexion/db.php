<?php
    function obtenerConexion() {
        $host = "localhost";
        $nombreBD = "videojuegos";
        $usuario = "root";
        $password = "";
        try {
            $conexion = new PDO(
            "mysql:host=$host;dbname=$nombreBD;charset=utf8mb4",
            $usuario,
            $password
            );
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
            ;
            return $conexion;
        } catch (PDOException $e) {
        echo
        echo "Error de conexión: " . $e->getMessage();
        exit;
        }
    }
?>