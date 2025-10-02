<?php

$numero = $_POST['numero'];
$temp = $numero;
$contador = 0;

while($temp>0){
    $temp = (int)($temp/10);
    $contador++;
}

echo "El número <b>$numero</b> tiene <b>$contador</b> dígitos.";

?>