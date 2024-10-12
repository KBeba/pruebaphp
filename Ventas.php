<!DOCTYPE html>
<html>
<head>
    <title>VENTAS</title>
</head>
<body>
    <form method="POST" action="">
        <label>Enrrollado ($10):</label>
        <input type="number" name="cantidad1" value="0" min="0"><br>

        <label>Perro Caliente ($1):</label>
        <input type="number" name="cantidad2" value="0" min="0"><br>

        <label>Refresco ($1):</label>
        <input type="number" name="cantidad3" value="0" min="0"><br>

        <label>Pizza ($15):</label>
        <input type="number" name="cantidad4" value="0" min="0"><br>

        <label>Hamburguesa ($5):</label>
        <input type="number" name="cantidad5" value="0" min="0"><br><br>

        <input type="submit" name="Enviar" value="comprar">
    </form>

    <?php
    if (isset($_POST['Enviar'])) {
        $menu = [
            "cantidad1" => 10,  // Enrrollado
            "cantidad2" => 1,   // Perro Caliente
            "cantidad3" => 1,   // Refresco
            "cantidad4" => 15,  // Pizza
            "cantidad5" => 5    // Hamburguesa
        ];

        $totalPagar = 0;

        foreach ($menu as $producto => $precio) {
            $cantidad = isset($_POST[$producto]) ? (int)$_POST[$producto] : 0;
            if ($cantidad > 0) {
                $totalPagar += $cantidad * $precio;
            }
        }

        echo "Total a pagar: $totalPagar $";
    }
    ?>
</body>
</html>

