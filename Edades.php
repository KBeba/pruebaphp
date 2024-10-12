<?php
$edades = [3, 15, 22, 34, 45, 12, 6, 28, 55, 67, 40, 10, 16, 25, 62, 70, 13, 29, 30, 50];
$niños = 0;
$jovenes = 0;
$adultos = 0;
$viejos = 0;
foreach ($edades as $edad) {
    if ($edad >= 0 && $edad <= 13) {
        $niños++;
    } elseif ($edad >= 14 && $edad <= 29) {
        $jovenes++;
    } elseif ($edad >= 30 && $edad <= 59) {
        $adultos++;
    } elseif ($edad >= 60) {
        $viejos++;
    }
}
echo "Niños: $niños ";
echo "Jóvenes: $jovenes ";
echo "Adultos: $adultos ";
echo "Viejos: $viejos ";
?>