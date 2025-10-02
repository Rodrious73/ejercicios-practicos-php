<?php

$anio = $_POST['anio'];

$anio_actual = 2025;

echo 'Año actual: <b>'.$anio_actual.'</b><br>';
echo 'Año ingresado: <b>'.$anio.'</b><br>';
if ($anio > 2000){

    if($anio == $anio_actual){
        echo 'PRESENTE';
    } else if ($anio < $anio_actual){
        echo 'PASADO';
    } else {
        echo 'FUTURO';
    }
} else {
    echo 'Año ingresado menor o igual a 2000, intente de nuevo.';
}

?>