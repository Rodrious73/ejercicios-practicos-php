<?php


$primer_numero = $_POST['primerNumero'];
$segundo_numero = $_POST['segundoNumero'];
$tercer_numero = $_POST['tercerNumero'];

$suma = $primer_numero + $segundo_numero;


echo 'Primer numero: '. $primer_numero.'<br>';
echo 'Segundo numero: '. $segundo_numero.'<br>';
echo 'Tercer numero: '. $tercer_numero.'<br>';
echo 'La suma del primer numero + el segundo numero es: <b>'. $suma.'</b><br>';
if($tercer_numero == $suma){
    echo 'El tercer numero <b>'. $tercer_numero.'</b> es igual a la suma: <b>'. $suma.'</br>';
} else {
    echo 'El tercer numero <b>'. $tercer_numero.'</b> no es igual a la suma: <b>'. $suma.'</br>';
}

?>