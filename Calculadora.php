<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$operacion=$_POST["operacion"];
switch ($operacion) {
    case "suma";
$result=$num1 + $num2;
break;
case "resta";
$result=$num1 - $num2;
break;
case "multiplicacion";
$result=$num1 * $num2;
break;
case "division";
if ($num2==0){
    $result="No se puede dividir por 0";}
else 
{$result=$num1 / $num2;}
break;
}
echo "El resultado es:", $result;
}