<?php

$primer_numero = $_POST['pri_numero'];
$segundo_numero = $_POST['seg_numero'];

$suma = 0;
$i;
if($primer_numero>$segundo_numero){
    for($i=$segundo_numero; $i<=$primer_numero; $i++){
        echo "Numero <b>$i</b><br>";
        $suma+=$i;
    }
}else{
    for($i=$primer_numero; $i<=$segundo_numero; $i++){
        echo "Numero <b>$i</b><br>";
        $suma+=$i;
    }
}

echo "La suma es <b>$suma</b>";

?>