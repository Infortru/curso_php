<?php
    // Con break podemos detener un ciclo

    $ordenador = ["CPU", "RAM", "Grafica", "HD"];

    foreach ($ordenador as $ord) {
        echo $ord ."<br>";
        if ($ord == "Grafica") {    // Se detiene la ejecución cuando la variable alcanza este valor
            break;
        }
    };

    foreach ($ordenador as $ord) {
        if ($ord == "Grafica") {    // No se ejecuta cuando la variable está en este valor
            continue;
        };
        echo $ord ."<br>";
    };