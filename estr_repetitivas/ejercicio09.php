<?php

$numero = $_POST['numero'];
$temp = $numero;
$contador_pares = 0;

while($temp>0){
    $num_evaluar = $temp%10;
    if($num_evaluar%2==0){
        $contador_pares++;
    }
    $temp = (int)($temp/10);
}

echo "El número <b>$numero</b> tiene <b>$contador_pares</b>  numero pares.";

?>