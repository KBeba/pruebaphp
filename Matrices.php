<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            border: 1px solid black;
        }
        .marcado {
            background-color: yellow;
        }
    </style>
</head>
<body>
    <h1>Juego de Bingo</h1>

    <form method="post" action="">
        <label for="aciertos">Número de aciertos necesarios para ganar:</label>
        <input type="number" name="aciertos" min="1" max="25" required>
        <br><br>
        <input type="submit" name="iniciar" value="Iniciar Bingo">
    </form>

    <?php
    session_start();

    function generarCarton() {
        $numeros = range(1, 75);
        shuffle($numeros);
        return array_chunk(array_slice($numeros, 0, 25), 5);
    }

    function imprimirCarton($carton, $marcados) {
        echo "<table>";
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) {
                $numero = $carton[$i][$j];
                if (in_array($numero, $marcados)) {
                    echo "<td class='marcado'>$numero</td>";
                } else {
                    echo "<td>$numero</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    if (isset($_POST['iniciar'])) {
        $aciertosNecesarios = (int)$_POST['aciertos'];

        if (!isset($_SESSION['carton'])) {
            $_SESSION['carton'] = generarCarton();
            $_SESSION['marcados'] = [];
        }

        $carton = $_SESSION['carton'];
        $marcados = $_SESSION['marcados'];

        do {
            $numeroCantado = rand(1, 75);
        } while (in_array($numeroCantado, $marcados));

        $marcados[] = $numeroCantado;
        $_SESSION['marcados'] = $marcados;

        $aciertos = 0;
        foreach ($carton as $fila) {
            foreach ($fila as $numero) {
                if (in_array($numero, $marcados)) {
                    $aciertos++;
                }
            }
        }

        echo "<h2>Número cantado: $numeroCantado</h2>";
        echo "<h3>Aciertos: $aciertos / $aciertosNecesarios</h3>";

        imprimirCarton($carton, $marcados);

        if ($aciertos >= $aciertosNecesarios) {
            echo "<h2>¡Felicidades! Has alcanzado $aciertos aciertos. ¡Ganaste!</h2>";
            session_destroy();  
        } else {
            echo "<form method='post' action=''>
                    <input type='hidden' name='aciertos' value='$aciertosNecesarios'>
                    <input type='submit' name='iniciar' value='Cantar otro número'>
                  </form>";
        }
    }
    ?>
</body>
</html>
