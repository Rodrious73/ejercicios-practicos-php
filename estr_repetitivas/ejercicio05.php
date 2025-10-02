<?php

$primer_numero = $_POST['pri_numero'];
$segundo_numero = $_POST['seg_numero'];

$suma = 0;

if ($primer_numero > $segundo_numero) {
    echo "El primer número <b>$primer_numero</b> no puede ser mayor que el segundo número <b>$segundo_numero</b><br>";
    echo "<b>Se invertirán los valores</b><br>";
    $temp = $primer_numero;
    $primer_numero = $segundo_numero;
    $segundo_numero = $temp;
    echo "Quedando como primer número <b>$primer_numero</b> y segundo número <b>$segundo_numero</b><br>";
}

for ($i = $primer_numero; $i <= $segundo_numero; $i++) {
    if ($i % 2 == 0) {
        echo "Número par: <b>$i</b><br>";
        $suma += $i;
    }
}

echo "La suma de los números pares en el rango es: <b>$suma</b>";

?>
