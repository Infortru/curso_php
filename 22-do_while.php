<?php
    //En la estructura do...while primero se ejecuta el código y después se comprueba si se cumple la condición

    $contador = 1;

    do {
        echo $contador . "<br>";
        $contador++;
    }
    while ($contador <= 22);