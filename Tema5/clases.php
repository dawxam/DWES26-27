<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h1>Listado de Personas</h1>

    <div class="container">
        <?php
            require_once 'Persona.php';

            $persona1 = new Persona("12345678A", "Xavi", "xavi@email.com");
            $estudiante1 = new Estudiante("87654321B", "Pepe Profe", "pepe.devesa@email.com", "EXP001");

            $persona1->setEmail("xavi.nuevo@email.com");
            $estudiante1->setNombre("Pepillo Devesa");

            $persona1->Mostrar();
            $estudiante1->Mostrar();
        ?>
    </div>

</body>
</html>