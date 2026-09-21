<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="contenedor">
        <?php
            $filas = 6;
            $columnas = 9;
            $usados = array();
            $matriz = array();
            
            for ($i = 0; $i < $filas; $i++) {
                for ($j = 0; $j < $columnas; $j++) {
                    do {
                        $num = rand(100, 999);
                    } while (in_array($num, $usados));  

                    $usados[] = $num;
                    $matriz[$i][$j] = $num;
                }
            }
                        
            $maximo = -1;
            $minimo = 1000;
            $filaMinimo = -1;
            $columnaMaximo = -1;

            for ($i = 0; $i < $filas; $i++) {
                for ($j = 0; $j < $columnas; $j++) {
                    $valorActual = $matriz[$i][$j];
                    
                    if ($valorActual > $maximo) {
                        $maximo = $valorActual;
                        $columnaMaximo = $j;
                    }
                        
                    if ($valorActual < $minimo) {
                        $minimo = $valorActual;
                        $filaMinimo = $i;
                    }
                }
            }?>

            <h2>Matriz de Números Aleatorios</h2>

            <table border="1" cellpadding="8" cellspacing="0">
                <?php for ($i = 0; $i < $filas; $i++): ?>
                    <tr>
                        <?php for ($j = 0; $j < $columnas; $j++): ?>
                            <?php
                            $color = 'black';
                            
                            if ($j == $columnaMaximo) {
                                $color = 'blue';
                            } elseif ($i == $filaMinimo) {
                                $color = 'green';
                            }?>

                            <td style="color: <?php echo $color; ?>;">
                                <?php echo $matriz[$i][$j]; ?>
                            </td>
                        <?php endfor; ?>
                    </tr>
                    <?php endfor; ?>
            </table>
        </div>
    </body>
</html>