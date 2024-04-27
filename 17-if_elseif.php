<?php
    //Combinación de else e if, con varias condiciones

    $dia = 7;

    if ($dia == 1) {
        echo "Lunes";
    } else if ($dia == 2) {
        echo "Martes";
    } else if ($dia == 3) {
        echo "Miércoles";
    } else if ($dia == 4) {
        echo "Jueves";
    } else if ($dia == 5) {
        echo "Viernes";
    } else if ($dia == 6) {
        echo "Sábado";
    } else if ($dia == 7) {
        echo "Domingo";
    } else {
        echo "Valor no válido";
    }