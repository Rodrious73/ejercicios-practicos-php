<?php

$num = $_POST['numero'];

$i = 1;
$suma = 0;

while($num>=1){
    $suma = $suma + $num;

    $num--;

    echo 'Numero <b>[' . $i.']</b><br>';

    $i++;
}

echo 'La suma es <b>['. $suma.']</b><br>';

?>