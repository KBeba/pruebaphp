<?php
$colores = ["Azul", "Amarillo", "Rojo"];
echo count($colores);

$helados = ["Chocolate", "Fresa"];
array_push($frutas, "Mantecado"); // Agrega "Mantecado" al final
print_r($frutas); // Esto imprimirá: Array ( [0] => Chocolate [1] => Fresa [2] => Mantecado )

$helado_eliminado = array_pop($helados); // Elimina y obtiene "Mantecado"
print_r($helados); // Esto imprimirá: Array ( [0] => Chocolate [1] => Fresa )
echo $helado_eliminado; // Esto imprimirá: Mantecado






?>

