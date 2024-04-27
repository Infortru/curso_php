<?php
    // Los condicionales se pueden anidar unos dentro de otros, ejecuatándose la condición externa
    // y luego la interna que corresponda

    $edad = 55;
    $genero = "hombre";

    if ($genero == "hombre") {
        if ($edad >= 60) {
            echo "Se puede jubilar";
        } else {
            echo "No se puede jubilar";
        }
    }
    elseif ($genero == "mujer") {
        if ($edad >= 54) {
            echo "Se puede jubilar";
        } else {
            echo "No se puede jubilar";
        }   
    } else {
        echo "Elija un opción válida";
    }
    
    