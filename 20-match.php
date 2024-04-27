<?php
    //Similar a la estructura swicth pero en la comparación tiene en cuenta también el tipo de dato

    $dia = 3;

    $resultado = match ($dia) {
        1 => "Lunes",
        2 => "Martes",
        3 => "Miércoles",
        4 => "Jueves",
        5 => "Viernes",
        6 => "Sábado ",
        7 => "Domingo",
        default => "No hay un valor válido"
    };

    echo $resultado;
