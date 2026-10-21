<?php
    require_once "../model/Videojuego.php";

    class VideojuegoController {
        
        private $modelo;

        public function __construct() {
            $this->modelo = new VideojuegoModel();
        }

        public function index() {
            $mensaje = "";
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'
            ])) {
            $nombre = $_POST['nombre'];
            $genero = $_POST['genero'];
            $precio = $_POST['precio'];
            $exito = $this->modelo->insertar($nombre, $genero, $precio);
            $mensaje = $exito ? "¡Videojuego guardado con éxito!" : "Error
            al guardar el videojuego.";
            }

            $videojuegos = $this->modelo->obtenerTodos();

            $mensaje

            require_once "../vista/listar.php";
        }
    }
?>