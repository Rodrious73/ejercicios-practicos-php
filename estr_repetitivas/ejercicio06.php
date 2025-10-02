<?php

$numero = $_POST['numero'];

$cant_par = 0;
$cant_impar = 0;

echo "Numero aleatorio del <b>1</b> al <b>$numero</b><br>";

for($i=1; $i<=$numero;$i++){
    $num_aleatorio = rand(1, $numero);

    echo "Numero aleatorio generado <b>$num_aleatorio</b><br>";
    
    if($num_aleatorio % 2 == 0){
        $cant_par++;
    }else {
        $cant_impar++;
    }
}

echo "Cantidad de pares: <b>$cant_par</b><br>";
echo "Cantidad de impares: <b>$cant_impar</b><br>";

?>