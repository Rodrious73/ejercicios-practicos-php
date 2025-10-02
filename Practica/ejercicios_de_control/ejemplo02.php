<?php

$primerNumero = $_POST['primerNumero'];
$segundoNumero = $_POST['segundoNumero'];
$tercerNumero = $_POST['tercerNumero'];
$cuartoNumero = $_POST['cuartoNumero'];
$quintoNumero = $_POST['quintoNumero'];

$mayor = $primerNumero;

if($segundoNumero > $mayor){
    $mayor = $segundoNumero;
}

if($tercerNumero > $mayor){
    $mayor = $tercerNumero;
}

if($cuartoNumero > $mayor){
    $mayor = $cuartoNumero;
}

if($quintoNumero > $mayor){
    $mayor = $quintoNumero;
}

echo 'El mayor numero de los 5 numeros ingresados es: '. $mayor . '<br>';
echo 'Numeros ingresados: <br>';
echo '-> '. $primerNumero.'<br>';
echo '-> '. $segundoNumero.'<br>';
echo '-> '. $tercerNumero.'<br>';
echo '-> '. $cuartoNumero.'<br>';
echo '-> '. $quintoNumero.'<br>';
?>