<?php
    class Persona {
        private string $dni;
        private string $nombre;
        private string $email;

        public function __construct(string $dni, string $nombre, string $email) {
            $this->dni = $dni;
            $this->nombre = $nombre;
            $this->email = $email;
        }

        public function getDni(): string {
            return $this->dni;
        }

        public function getNombre(): string {
            return $this->nombre;
        }

        public function getEmail(): string {
            return $this->email;
        }

        public function setDni(string $dni): void {
            $this->dni = $dni;
        }

        public function setNombre(string $nombre): void {
            $this->nombre = $nombre;
        }

        public function setEmail(string $email): void {
            $this->email = $email;
        }

        public function Mostrar(): void {
            echo "<p>{$this->dni} - {$this->nombre} - {$this->email}</p>";
        }
    }

    class Estudiante extends Persona {
        private string $numExpediente;

        public function __construct(string $dni, string $nombre, string $email, string $numExpediente) {
            parent::__construct($dni, $nombre, $email);
            $this->numExpediente = $numExpediente;
        }

        public function getNumExpediente(): string {
            return $this->numExpediente;
        }

        public function setNumExpediente(string $numExpediente): void {
            $this->numExpediente = $numExpediente;
        }

        public function Mostrar(): void {
            echo "<p>{$this->getDni()} - {$this->getNombre()} - {$this->getEmail()} - {$this->getNumExpediente()}</p>";
        }
    }
?>