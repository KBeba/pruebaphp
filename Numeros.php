<?php
$numeros = [1, -2, 0, 5, -7, 3, 0, -4, 9, 0, -6, 12, -8, 0, 2, -1, 4, 0, 7, -3];
$positivos = 0;
$negativos = 0;
$neutros = 0;
foreach ($numeros as $num) {
    if ($num > 0) {
        $positivos++;
    } elseif ($num < 0) {
        $negativos++;
    } else {
        $neutros++;
    }
}
echo "Positivos: $positivos ";
echo "Negativos: $negativos ";
echo "Neutros (ceros): $neutros ";
?>