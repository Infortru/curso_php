<?php
    /********************************************************
     * Permiten combinar expresiones simples                *
     * evaluarlas y devolver un valor booleano              *
     *  and - &&    -Devuelve true si ambas son verdaderas  *
     *  or - ||     -Devuelve true si una es verdadera      *
     *  not - !     -Niega la expresión                     *
     *******************************************************/

    $variable1 = 6;
    $variable2 = 7;

    var_dump($variable1 == 6 && 9<3); // True and False = False
    var_dump($variable1 == 6 || $variable2 == 1); // True or False = True
    var_dump(!($variable1 == 4)); // False negado = True
