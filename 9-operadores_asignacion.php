<?php
    /********************************************************
     * Los operadores de asignación nos permiten realizar   *
     * operaciones de forma más corta                       *
     *  = - Asignación                                      *
     *  += - Sumar y asignar                                *
     *  -= - Restar y asignar                               *
     *  *= - Mulstiplicar y asignar                         *
     *  /= - Dividir y asignar                              *
     *  .= - Concatenar y asignar                           *
     *******************************************************/

    $numero = 5;

    $numero += 4; // equivale a $numero = $numero + 4
    $numero -= 3; // equivale a $numero = $numero - 3
    $numero *= 5; // equivale a $numero = $numero * 5
    $numero /= 10; // equivale a $numero = $numero / 10
    $numero = "Texto de prueba ";
    $numero .= 3; // concatena ambas variables

    echo $numero;
