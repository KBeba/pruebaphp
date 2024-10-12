<?php
$matriz2 = array();
llenarMatriz($matriz2,5,2);
mostrarMatriz($matriz2,5,2);
echo '<br>';
$matriz1=array();
$cantF=2;
$cantC=2;
llenarMatriz($matriz1,$cantF,$cantC);
mostrarMatriz($matriz1,$cantF,$cantC);
function mostrarMatriz(&$matriz, $f,  $c)
{
    echo "<table border='1'>";
    for ($i = 0; $i < $f; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $c; $j++) {

            echo "<td>" ."posicion". $i,$j."=".  $matriz[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
function llenarMatriz(&$matriz, $f,  $c)
{
    for ($i = 0; $i < $f; $i++) {
        for ($j = 0; $j < $c; $j++) {
            $matriz[$i][$j] = rand(1, 20);
        }
    }
}
?>