<?php
$edades= array (2,45,12,34,44,56,76,78,23,49);
echo "El mayor es: ", encontrarMayorNumero($edades);
echo "<br>";
echo "El valor maximo es de: ", max($edades);
function encontrarMayorNumero(array $numero): int {
    $mayorNumero=$numero[0];
    foreach ($numeros as $numero){
        if ($numero>$mayorNumero) {
            $mayorNumero=$numero;
        }
    }
    return $mayorNumero;
}
?>