<?php
    require_once "../conexion/db.php";

    class VideojuegoModel {
        private $conexion;

        public function __construct() {
            $this->conexion = obtenerConexion();
        }

        public function insertar($nombre, $genero, $precio) {
            try {
                $sql = "INSERT INTO videojuego (titulo, genero, precio)
                VALUES (:nombre, :genero, :precio)";
                $stmt = $this->conexion->prepare($sql);
                $stmt->bindParam(':nombre', $nombre);
                $stmt->bindParam(':genero', $genero);
                $stmt->bindParam(':precio', $precio);
                return $stmt->execute();
            } catch (PDOException $e) {
                return false;
            }
        }

        public function obtenerTodos() {
            try {
                $sql = "SELECT * FROM videojuego";
                $stmt = $this->conexion->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                return [];
            }
        }
    }
?>