<?php


$nivel = $_POST['selectNivel'];
$colegio = $_POST['selectColegio'];

$costo = 0;

switch ($colegio){
    case 'N':
        if($nivel == 'A'){
            $costo = 300;
        } else if ($nivel == 'B'){
            $costo = 200;
        } else if ($nivel == 'C'){
            $costo = 100;
        }
        break;
    case 'P':
        if($nivel == 'A'){
            $costo = 400;
        } else if ($nivel == 'B'){
            $costo = 300;
        } else if ($nivel == 'C'){
            $costo = 200;
        }
        break;
    default:
        echo 'No se registro nada.';
}

echo 'Tiene un nivel socioeconomico de '. $nivel. ' , y su colegio es '. $colegio . ', por lo tanto el costo de su examen de admision es de S/'. $costo;

?>