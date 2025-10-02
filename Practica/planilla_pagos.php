<?php
$tarifa_por_hora = 15;

$dias_trabajados = $_POST['dias_trabajados'];
$horas_trabajadas = $_POST['horas_trabajadas'];

$sueldo_bruto = $horas_trabajadas * $tarifa_por_hora;
$descuento_afp = $sueldo_bruto * 0.118;
$descuento_5cat = $sueldo_bruto * 0.18;
$total_descuentos = $descuento_afp + $descuento_5cat;
$bonificacion = $sueldo_bruto * 0.16;
$total_a_pagar = $sueldo_bruto - $total_descuentos + $bonificacion;

echo "Días trabajados: $dias_trabajados<br>";
echo "Horas trabajadas: $horas_trabajadas<br><br>";

echo "Sueldo bruto: S/ $sueldo_bruto<br><br>";

echo "AFP (11.8%): S/ $descuento_afp<br>";
echo "5ta Categoría (18%): S/ $descuento_5cat<br>";
echo "Total descuentos: S/ $total_descuentos<br><br>";

echo "Bonificación (16%): S/ $bonificacion<br><br>";

echo "TOTAL A PAGAR: S/ $total_a_pagar<br><br>";
?>
