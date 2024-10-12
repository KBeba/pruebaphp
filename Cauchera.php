<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $Cantidad=$_POST["Cantidad"];
    echo "La cantidad de cauchos ingresada fue:", $Cantidad, "<br>";
    if ($Cantidad<5)
    {$precio=$Cantidad*800;}
    else 
    {$precio=$Cantidad*700;}
    echo "Su total a pagar es de:", $precio, "<br>";
}
?>