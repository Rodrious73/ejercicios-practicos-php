<?php

$numero = $_POST['numero'];
$temp = $numero;

$mayor = $temp%10;

while($temp>0){
    $num_evaluar = $temp%10;

    if($mayor < $num_evaluar){
        $mayor = $num_evaluar;
    }

    $temp = (int)($temp/10);
}

echo "El número <b>$numero</b> tiene como digito mayor a <b>$mayor</b>.";

?>