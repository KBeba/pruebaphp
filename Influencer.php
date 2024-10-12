<?php
$dineroDisponible = 10000; 
$personas = 0;
$edad = 0;
while ($dineroDisponible > 0) {
    $edad = rand(1, 100);
    $dineroRequerido = $edad * 10; 
    if ($dineroDisponible >= $dineroRequerido) {
        $dineroDisponible -= $dineroRequerido;
        $personas++;
    } else {
        break;
    }
}
echo "Personas que recibieron dinero: $personas. ";
echo "Dinero restante: €$dineroDisponible";
?>