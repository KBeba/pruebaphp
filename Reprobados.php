<?php
$calificaciones = [85, 67, 90, 55, 78, 82, 95, 69, 60, 72, 88, 45, 73, 80, 91, 68, 59, 77, 83, 65];
$reprobados = 0;
$Alumnos = count($calificaciones);
foreach ($calificaciones as $calificacion) {
    if ($calificacion < 70) {
        $reprobados++;
    }
}
$porcentaje= ($reprobados / $Alumnos) * 100;
echo "Porcentaje de reprobados: ", $porcentaje, "%";
?>