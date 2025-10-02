<?php

$num_dia = $_POST['dia'];
$num_mes = $_POST['numes'];

$estacion;

switch ($num_mes){
    case 1:
        $estacion = 'Verano';
        break;
    case 2:
        $estacion = 'Verano';
        break;
    case 3:
        if($num_dia >= 1 && $num_dia <=20){
            $estacion = 'Verano';
        } else {
            $estacion = 'Otoño';
        }
        break;
    case 4:
        $estacion = 'Otoño';
        break;
    case 5:
        $estacion = 'Otoño';
        break;
    case 6:
        if($num_dia >= 1 && $num_dia <=21){
            $estacion = 'Otoño';
        } else {
            $estacion = 'Invierno';
        }
        break;
    case 7:
        $estacion = 'Invierno';
        break;
    case 8:
        $estacion = 'Invierno';
        break;
    case 9:
        if($num_dia >= 1 && $num_dia <=22){
            $estacion = 'Invierno';
        } else {
            $estacion = 'Primavera';
        }
        break;
    case 10:
        $estacion = 'Primavera';
        break;
    case 11:
        $estacion = 'Primavera';
        break;
    case 12:
        if($num_dia >= 1 && $num_dia <=20){
            $estacion = 'Primavera';
        } else {
            $estacion = 'Verano';
        }
        break;
}

echo 'Dia ingresado: <b>'. $num_dia .'</b><br>';
echo 'Numero mes ingresado: <b>'. $num_mes .'</b><br>';
echo 'Estacion en la que te encuentras: <b>'. $estacion .'</b><br>';

?>