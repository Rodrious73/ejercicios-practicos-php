<?php

$numeroNatural = $_POST['numeroNatural'];

$suma = 0;

$i = 1;

do{

    echo '-> '. $i. '<br>';
    $suma = $i + $suma;

    $i++;
}while ($i<=$numeroNatural);

echo 'La suma es: '.$suma;

?>
