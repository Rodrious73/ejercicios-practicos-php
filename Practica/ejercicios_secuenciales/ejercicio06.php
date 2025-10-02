<?php

$donacion = $_POST['txtDonacion'];

$donacion_salud = $donacion * 0.25;
$donacion_comedor_infantil = $donacion * 0.35;
$donacion_escuela_infantil = $donacion * 0.25;
$donacion_asilo_ancianos = $donacion - ($donacion_salud + $donacion_comedor_infantil + $donacion_escuela_infantil);

echo "Donación total: $donacion <br>";
echo "Donación para salud: $donacion_salud <br>";
echo "Donación para comedor infantil: $donacion_comedor_infantil <br>";
echo "Donación para escuela infantil: $donacion_escuela_infantil <br>";
echo "Donación para asilo de ancianos: $donacion_asilo_ancianos <br>";
?>