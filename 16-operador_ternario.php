<?php
    /************************************************************
     * El operador ternario es un condicional if en una linea,  *
     * compuesto de operador y dos resultados                   *
     *                                                          *
     *  operador ? valor verdadero : valor falso                *
     * *********************************************************/

     (20 > 11) ? $expres = "Expresión verdadera" : $expres = "Expresón falsa";
     echo $expres; // SE ejecuta la primera parte
     
     (20 < 11) ? $expres = "Expresión verdadera" : $expres = "Expresón falsa";
     echo $expres; // SE ejecuta la segunda parte