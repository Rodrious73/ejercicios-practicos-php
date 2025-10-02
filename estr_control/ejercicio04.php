<?php

$nombre1 = $_POST['nombre1'];
$edad1 = $_POST['edad1'];

$nombre2 = $_POST['nombre2'];
$edad2 = $_POST['edad2'];

echo 'Hermano 01 - Nombre: <b>'. $nombre1 . '</b><br>';
echo 'Hermano 01 - Edad: <b>'. $edad1 . '</b><br>';
echo 'Hermano 02 - Nombre: <b>'. $nombre2 . '</b><br>';
echo 'Hermano 02 - Edad: <b>'. $edad2 . '</b><br>';

if($edad2 > $edad1){
    $diferencia = $edad2 - $edad1;
    echo 'El mayor es '. $nombre2 . ', con una diferencia de '. $diferencia.' años con el menor.';
}else if($edad1 > $edad2){
    $diferencia = $edad1 - $edad2;
    echo 'El mayor es '. $nombre1 . ', con una diferencia de '. $diferencia.' años con el menor.';
}else {
    echo 'Ambos tienen la misma edad.';
}

?>
