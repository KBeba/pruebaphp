<!DOCTYPE html>
<html>
<head>
    <title>ADIVINAR</title>
    <style>
        .color-square {
            width: 20px;
            height: 20px;
            display: inline-block;
            margin-right: 5px;
        }
        .azul { background-color: blue; }
        .rojo { background-color: red; }
        .negro { background-color: black; }
        .verde { background-color: green; }
        .amarillo { background-color: yellow; }
    </style>
</head>
<body>
    
    <h1>Juego Adivinar Colores</h1>
    <h2>Consiste en adivinar los colores que el computador ha seleccionado aleatoriamente</h2>
    <h3>Coloque los números correspondientes a los colores:</h3>
      
    <div class="color-square azul"></div>
    <label>1 - Azul</label><br>
    <div class="color-square rojo"></div>
    <label>2 - Rojo</label><br>
    <div class="color-square negro"></div>
    <label>3 - Negro</label><br>
    <div class="color-square verde"></div>
    <label>4 - Verde</label><br>
    <div class="color-square amarillo"></div>
    <label>5 - Amarillo</label><br>

    <form method="post" action="">
        <label for="num1">Primer color (1-5):</label>
        <input type="number" name="num1" min="1" max="5" required><br>

        <label for="num2">Segundo color (1-5):</label>
        <input type="number" name="num2" min="1" max="5" required><br>

        <label for="num3">Tercer color (1-5):</label>
        <input type="number" name="num3" min="1" max="5" required><br><br>

        <input type="submit" name="Enviar" value="Adivinar">
    </form>

    <?php
    if (isset($_POST['Enviar'])) {
        
        $coloresPC = [];
        while (count($coloresPC) < 3) {
            $colorAleatorio = rand(1, 5);
            if (!in_array($colorAleatorio, $coloresPC)) {
                $coloresPC[] = $colorAleatorio;
            }
        }

        $coloresUsuario = [
            (int)$_POST['num1'],
            (int)$_POST['num2'],
            (int)$_POST['num3']
        ];

        echo "Colores seleccionados por la PC: " . implode(", ", $coloresPC) . "<br>";

        $coloresAcertados = 0;
        $posicionesAcertadas = 0;

        foreach ($coloresUsuario as $index => $colorUsuario) {
            if (in_array($colorUsuario, $coloresPC)) {
                $coloresAcertados++;
                if ($colorUsuario == $coloresPC[$index]) {
                    $posicionesAcertadas++;
                }
            }
        }

        echo "Usted acertó $coloresAcertados colores.<br>";
        echo "Usted acertó $posicionesAcertadas posiciones.<br>";

        if ($posicionesAcertadas == 3) {
            echo "<h2>¡GANADOR! Acertaste todos los colores y sus posiciones.</h2>";
        }
    }
    ?>
</body>
</html>
