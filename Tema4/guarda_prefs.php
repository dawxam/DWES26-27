<?php

    //var_dump($_POST);

    foreach ($_POST as $campo => $valor) {
        $campoFormateado = ucfirst($campo);

        setcookie($campo, $valor, time() + 300);
    }

    header("Location: index.php");
    exit();
?>