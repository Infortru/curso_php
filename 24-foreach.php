<?php
    // El ciclo foreach se utiliza para iterar sobre arrays

    $ordenador = ["CPU", "RAM", "Grafica", "HD"];

    foreach ($ordenador as $ord) {
        echo " ". $ord ." ";
    }
    echo "<br>";

    $frutas = [
        "fresas" => 110,
        "plátanos" => 50,
        "peras" => 77,
        "ciruelas" => 90,
    ];

    foreach ($frutas as $clave => $valor) {
        echo "Hay ". $valor ." ". $clave ." en la frutería"."<br>";
    }

    $productos = [
        ["referencia" => "1001", "denominación" => "turismo"],
        ["referencia" => "1002", "denominación" => "furgoneta"],
        ["referencia" => "1003", "denominación" => "monovolumen"],
        ["referencia" => "1004", "denominación" => "SUV"],
    ];

    foreach ($productos as $prod) {
        echo "<br>". $prod["referencia"] ." - ". $prod["denominación"];
    };