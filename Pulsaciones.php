<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST["Edad"];
    $sexo = $_POST["sexo"];

    if ($sexo == "femenino") {
        $pulsaciones = (220 - $edad) / 10;
    } elseif ($sexo == "masculino") {
        $pulsaciones = (210 - $edad) / 10;
    } else {
        echo "Sexo no válido.";
    }

    echo "Para ", $sexo, " de ", $edad, " años. El número de pulsaciones por cada 10 segundos es:", $pulsaciones,"<br>";}
?>
