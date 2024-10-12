<?php
$nombres = ["Carlos", "María", "Pedro", "Ana", "Luis"];
$horasTotales = [35, 42, 50, 40, 45];
$pagoNormal = 20;
$pagoExtra = 25;

for ($i = 0; $i < count($nombres); $i++) {
    $nombre = $nombres[$i];
    $horas = $horasTotales[$i];
    if ($horas <= 40) {
        $pago = $horas * $pagoNormal;
    } else {
        $horasExtras = $horas - 40;
        $pago = (40 * $pagoNormal) + ($horasExtras * $pagoExtra);
    }
    echo "Trabajador: $nombre, Pago: Bs. $pago <br>"; 
}
?>