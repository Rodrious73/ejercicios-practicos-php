<?php

$txtEP = $_POST['txtEP'];

$txtEF = $_POST['txtEF'];

$txtPC1 = $_POST['txtPC1'];
$txtPC2 = $_POST['txtPC2'];


$ep = $txtEP * 0.35;

$ef = $txtEF * 0.35;

$prom_pc = ($txtPC1 + $txtPC2) / 2;

$pc = $prom_pc * 0.30;

$prom_final = $ep + $ef + $pc;

echo 'Promedio final : ' . $prom_final . '<br>';

if ($prom_final >= 10.5){
    echo 'Estas aprobado amigo.';
}else {
    echo 'Estas desaprobado.';
}

?>