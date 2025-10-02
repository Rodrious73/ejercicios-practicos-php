<?php

$num_entero = $_POST['numEntero'];

$temp_num = $num_entero;
$cant_digitos = 0;

while($temp_num>0){
    $temp_num = (int)($temp_num / 10);
    $cant_digitos++;
}

echo 'Numero ingresado: <b>'. $num_entero .'</b><br>';

if($cant_digitos==1){
    echo 'Solo tiene un digito.';
} else if ($cant_digitos==2){
    echo 'Tiene '.$cant_digitos.' digitos.';
} else if ($cant_digitos==3){
    echo 'Tiene '.$cant_digitos.' digitos.';
} else {
    echo 'Tiene mas de 3 digitos.';
}

?>