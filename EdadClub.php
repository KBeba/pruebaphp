<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $Edad=$_POST["Edad"];
    if ($Edad<12)
    {echo "No puede ingresar solo";}
    elseif ($Edad>=12 && $Edad<18)
    {echo "Puede ingresar con su padre, que debe ser socio, o solo con previa autorizacion del padre socio";}
    else
    {echo "Puede ingresar con su respectivo carnet o pase otorgado";}
}
    ?>