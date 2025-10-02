<?php


$primer_entero = $_POST['txtPrimerNumero'];
$segundo_entero = $_POST['txtSegundoNumero'];

$primera_operacion = ($primer_entero * $primer_entero) + ($segundo_entero * $segundo_entero);


$cubos_primer_numero = ($primer_entero * $primer_entero * $primer_entero);
$cubos_segundo_numero = ($segundo_entero * $segundo_entero * $segundo_entero);

$promedio = ($cubos_primer_numero + $cubos_segundo_numero) / 2;

echo "El resultado de la primera operacion es: " . $primera_operacion . "<br>";
echo "El promedio de los cubos de ambos numeros es: " . $promedio . "<br>";

?>