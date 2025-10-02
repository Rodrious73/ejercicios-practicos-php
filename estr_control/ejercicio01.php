<?php


$val_compra = $_POST['valorCompra'];

$descuento = 0;

if ($val_compra>=1000){
    $descuento = $val_compra * 0.10;
}

$total_neto = $val_compra - $descuento;

echo 'Valor Inicial: S/'. $val_compra.'<br>';
echo 'Descuento: S/'. $descuento.'<br>';
echo 'Total neto a pagar: S/'. $total_neto;
    
?>