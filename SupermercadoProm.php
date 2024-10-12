<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $Compra=$_POST["Compra"];
$aleatorio = rand(1,100);
echo "Su número fue:", $aleatorio, "<br>";
if ($aleatorio < 50)
{
    $descuento=$Compra*15/100;
}
elseif ($aleatorio >=50 && $aleatorio <=80)
{
    $descuento=$Compra*20/100;
}
else
{
    $descuento=$Compra*30/100;
}
echo "El precio es:", $Compra, "<br>";
echo "El descuento es:", $descuento, "<br>";
echo "Su total a pagar es:", $Compra-$descuento, "<br>";
}
?>