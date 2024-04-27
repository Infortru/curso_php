<?php
    // Como convertir un string en un array usando delimitadores
    // Con explode(delimitador, string, limitador)

    $fecha = "24-03-2024";
    $array_fecha = explode("-", $fecha);  //Separamos por el guion;
    echo $array_fecha[0]." ".$array_fecha[1]." ".$array_fecha[2];

    $numeros = "1 2 3 4 5 6 7 8 9 0";
    $array_numeros = explode(" ", $numeros, 3); //Separamos por el espacio y lo dividimos en 3 partes
    echo $array_numeros[0]."-".$array_numeros[1]."-".$array_numeros[2];


