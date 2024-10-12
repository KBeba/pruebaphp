<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $Camisas=$_POST["Camisas"];
    $Unidad=$_POST["Unidad"];
    echo "El precio por camisa es de:", $Unidad,"<br>";
    echo "Su total sin descuento es de:", $Precio=$Camisas*$Unidad, "<br>";
if ($Camisas>=3)
    {$descuento=$Precio*20/100;}
else 
    {$descuento=$Precio*10/100;}
    echo "Su descuento es de:", $descuento, "<br>";
    echo "Su total a pagar es de:", $Precio-$descuento, "<br>";
}
?>
