<?php
$matriz=[];
for ($i=0;$i<4;$i++){
    for ($j=0;$j<4;$j++){
        $matriz[$i][$j]=rand(1,20);
    }
}
//foreach ($matriz as $fila){
//    foreach ($fila as $valor){
//        echo $valor . " ";
//   }
//   echo "<br>";
//}
echo "<table border='1'>";
for ($i=0;$i<4;$i++){
    echo"<tr>";
    for ($j=0;$j<4;$j++){
        echo "<td>". "posicion". $i,$j,"=". $matriz[$i][$j]. "</td>";
    }
    echo "</tr>";
}
echo "</table";
?>