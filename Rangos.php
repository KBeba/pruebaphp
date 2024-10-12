<?php
$rango1=0;
$rango2=0;
$rango3=0;
for ($i=1; $i<=20; $i++)
{$numeroAleatorio=rand(1,100);
if ($numeroAleatorio<=20){
    $rango1++;
}
elseif ($numeroAleatorio<=70){
    $rango2++;
}
else {
    $rango3++;
}
}