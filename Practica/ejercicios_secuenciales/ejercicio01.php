<?php

$nombre_empleado01 = $_POST['txtNombre1'];
$sueldo_empleado01 = $_POST['txtSueldo1'];

$nombre_empleado02 = $_POST['txtNombre2'];
$sueldo_empleado02 = $_POST['txtSueldo2'];

$nombre_empleado03 = $_POST['txtNombre3'];
$sueldo_empleado03 = $_POST['txtSueldo3'];

$sueldo_empleado01_aumento = $sueldo_empleado01 * 0.10;
$sueldo_empleado02_aumento = $sueldo_empleado02 * 0.12;
$sueldo_empleado03_aumento = $sueldo_empleado03 * 0.15;

$sueldo_empleado01_final = $sueldo_empleado01_aumento + $sueldo_empleado01;
$sueldo_empleado02_final = $sueldo_empleado02_aumento + $sueldo_empleado02;
$sueldo_empleado03_final = $sueldo_empleado03_aumento + $sueldo_empleado03;

echo "El empleado " . $nombre_empleado01 . " tiene un sueldo de: " . $sueldo_empleado01 . " y con el aumento queda en: " . $sueldo_empleado01_final . "<br>";
echo "El empleado " . $nombre_empleado02 . " tiene un sueldo de: " . $sueldo_empleado02 . " y con el aumento queda en: " . $sueldo_empleado02_final . "<br>";
echo "El empleado " . $nombre_empleado03 . " tiene un sueldo de: " . $sueldo_empleado03 . " y con el aumento queda en: " . $sueldo_empleado03_final . "<br>";

?>