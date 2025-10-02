<?php


$est_computacion = $_POST['txtComputacion'];
$est_contabilidad = $_POST['txtContabilidad'];
$est_enfermeria = $_POST['txtEnfermeria'];


$total= ($est_computacion + $est_contabilidad + $est_enfermeria);

$prom_computacion = ($est_computacion * 100) / $total;
$prom_contabilidad = ($est_contabilidad * 100) / $total;
$prom_enfermeria = ($est_enfermeria * 100) / $total;

echo 'Porcentaje computacion: ' . round($prom_computacion, 2) . '%<br>';
echo 'Porcentaje contabilidad: ' . round($prom_contabilidad,2) . '%<br>';
echo 'Porcentaje enfermeria: ' . round($prom_enfermeria,2) . '%<br>';
?>