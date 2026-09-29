<?php
//var_dump($_POST);
    if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST)) {
        echo '<table border="1" cellpadding="8" cellspacing="0">';
        echo '<thead>';
        echo '  <tr>';
        echo '    <th>Campo</th>';
        echo '    <th>Valor</th>';
        echo '  </tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($_POST as $campo => $valor) {
            $campoFormateado = ucfirst($campo);

            if (is_array($valor)) {
                $valorLimpio = htmlspecialchars(implode(', ', $valor), ENT_QUOTES, 'UTF-8');
            } else {
                $valorLimpio = htmlspecialchars($valor, ENT_QUOTES, 'UTF-8');
            }

            echo '  <tr>';
            echo '    <td><strong>' . $campoFormateado . '</strong></td>';
            echo '    <td>' . $valorLimpio . '</td>';
            echo '  </tr>';
        }

    echo '</tbody>';
    echo '</table>';
    } else {
        echo '<p>No se han recibido datos mediante el formulario.</p>';
    }
?>