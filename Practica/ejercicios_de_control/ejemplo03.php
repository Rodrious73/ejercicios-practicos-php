<?php

$numero = $_POST['numero'];

$en_romano;

if($numero == 1) {
    $en_romano = 'I';
} else if ($numero == 2) {
    $en_romano = 'II';
} else if ($numero == 3) {
    $en_romano = 'III';
} else if ($numero == 4) {
    $en_romano = 'IV';
} else if ($numero == 5) {
    $en_romano = 'V';
} else if ($numero == 6) {
    $en_romano = 'VI';
} else if ($numero == 7) {
    $en_romano = 'VII';
} else if ($numero == 8) {
    $en_romano = 'VIII';
} else if ($numero == 9) {
    $en_romano = 'IX';
} else if ($numero == 10) {
    $en_romano = 'X';
}

echo 'Su numero ingresado es '. $numero . ' en romano seria: '. $en_romano;

?>