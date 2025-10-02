<?php


$num_dni = $_POST['numdni'];

$indice = $num_dni % 23;

$NIF;

switch ($indice){
    case 0:
        $NIF = 'T';
        break;
    case 1:
        $NIF = 'R';
        break;
    case 2:
        $NIF = 'W';
        break;
    case 3:
        $NIF = 'A';
        break;
    case 4:
        $NIF = 'G';
        break;
    case 5:
        $NIF = 'M';
        break;
    case 6:
        $NIF = 'Y';
        break;
    case 7:
        $NIF = 'F';
        break;
    case 8:
        $NIF = 'P';
        break;
    case 9:
        $NIF = 'D';
        break;
    case 10:
        $NIF = 'X';
        break;
    case 11:
        $NIF = 'B';
        break;
    case 12:
        $NIF = 'N';
        break;
    case 13:
        $NIF = 'J';
        break;
    case 14:
        $NIF = 'Z';
        break;
    case 15:
        $NIF = 'S';
        break;
    case 16:
        $NIF = 'Q';
        break;
    case 17:
        $NIF = 'V';
        break;
    case 18:
        $NIF = 'H';
        break;
    case 19:
        $NIF = 'L';
        break;
    case 20:
        $NIF = 'C';
        break;
    case 21:
        $NIF = 'K';
        break;
    case 22:
        $NIF = 'E';
        break;
}

echo 'Para el numero de DNI: <b>'. $num_dni .'</b> el NIF es <b>' . $NIF.'</b>';

?>