<?php
    /*El valor de una variable  apunta al valor de otra sin copiarla*/

    $texto = "Hola como estás?";
    $variable1 = $texto; // La $variable1 toma el valor de $texto
    $variable2 = &$texto; // La $variable2 apunta a $texto y si modificamos $texto también se modifica la $variable2

    echo $variable2;

    $texto = "yo bien, gracias";

    echo $variable2;
