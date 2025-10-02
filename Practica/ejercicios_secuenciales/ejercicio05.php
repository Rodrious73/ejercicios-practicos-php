<?php

$edad01 = $_POST['txtEdad1'];

$edad02 = $_POST['txtEdad2'];

$edad03 = $_POST['txtEdad3'];

$monto_repartir = $_POST['txtRepartir'];

$suma_edades = ($edad01 + $edad02 + $edad03);

$monto_per1 = ($edad01 * $monto_repartir) / $suma_edades;

$monto_per2 = ($edad02 * $monto_repartir) / $suma_edades;

$monto_per3 = ($edad03 * $monto_repartir) / $suma_edades;

echo 'Monto de la persona 01: S/'. round($monto_per1, 2) . '<br>';
echo 'Monto de la persona 02: S/'. round($monto_per2, 2) . '<br>';
echo 'Monto de la persona 03: S/'. round($monto_per3, 2) . '<br>';

?>
