<?php
    // Se utiliza para comparar una variable con múltiples valores para determinar que parte del código se ejecuta

    $fruta = "Pera";

    switch ($fruta) {
        case "Fresa":
            echo "La fruta es fresa";
        break;
        case "Manzana":
            echo "La fruta es manzana";
        break;
        case "Pera":
            echo "La fruta es pera";
        break;
        default:
            echo "No se que fruta es";
    }