<?php

$primer_digito = $_POST['primerDigito'];
$segundo_digito = $_POST['segundoDigito'];
$tercer_digito = $_POST['tercerDigito'];

$unidos = $primer_digito.''.$segundo_digito.''.$tercer_digito;

echo 'Los digitos unidos son: '.$unidos;
?>