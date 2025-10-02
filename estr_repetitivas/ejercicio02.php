<?php

$numero = $_POST['numero'];

$suma = 0;

if($numero <=100){
    for($i=1;$i<=$numero;$i++){
        $par = 2 * $i;
        echo 'Par: <b>'. $par. '</b><br>';
        $suma += $par;
    }

    echo 'La suma es: <b>' . $suma.'</b>';
}else {
    echo 'Supero el maximo valor que es 100';
}

?>