<?php

$num_dia = $_POST['dia'];
$num_mes = $_POST['numes'];

$signo;

switch ($num_mes){
    case 1:
        if($num_dia >= 1 && $num_dia <=19){
            $signo = 'Capricornio';
        } else {
            $signo = 'Acuario';
        }
        break;
    case 2:
        if($num_dia >= 1 && $num_dia <=17){
            $signo = 'Acuario';
        } else {
            $signo = 'Piscis';
        }
        break;
    case 3:
        if($num_dia >= 1 && $num_dia <=19){
            $signo = 'Piscis';
        } else {
            $signo = 'Aries';
        }
        break;
    case 4:
        if($num_dia >= 1 && $num_dia <=19){
            $signo = 'Aries';
        } else {
            $signo = 'Tauro';
        }
        break;
    case 5:
        if($num_dia >= 1 && $num_dia <=20){
            $signo = 'Tauro';
        } else {
            $signo = 'Geminis';
        }
        break;
    case 6:
        if($num_dia >= 1 && $num_dia <=20){
            $signo = 'Geminis';
        } else {
            $signo = 'Cáncer';
        }
        break;
    case 7:
        if($num_dia >= 1 && $num_dia <=22){
            $signo = 'Cáncer';
        } else {
            $signo = 'Leo';
        }
        break;
    case 8:
        if($num_dia >= 1 && $num_dia <=22){
            $signo = 'Leo';
        } else {
            $signo = 'Virgo';
        }
        break;
    case 9:
        if($num_dia >= 1 && $num_dia <=22){
            $signo = 'Virgo';
        } else {
            $signo = 'Libra';
        }
        break;
    case 10:
        if($num_dia >= 1 && $num_dia <=22){
            $signo = 'Libra';
        } else {
            $signo = 'Escorpio';
        }
        break;
    case 11:
        if($num_dia >= 1 && $num_dia <=21){
            $signo = 'Escorpio';
        } else {
            $signo = 'Sagitario';
        }
        break;
    case 12:
        if($num_dia >= 22 && $num_dia <=31){
            $signo = 'Capricornio';
        } else {
            $signo = 'Sagitario';
        }
        break;
}

echo 'Dia ingresado: <b>'. $num_dia .'</b><br>';
echo 'Numero mes ingresado: <b>'. $num_mes .'</b><br>';
echo 'Tu signo zodiacal es: <b>'. $signo .'</b><br>';

?>