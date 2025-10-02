<?php

$numero = $_POST['numero'];

$suma = 0;

for($i=1;$i<=$numero;$i++){
    $impar = (2 * $i)-1;
    echo 'Impar: <b>'. $impar. '</b><br>';
    $suma += $impar;
}

echo 'La suma es: <b>' . $suma.'</b>';

?>