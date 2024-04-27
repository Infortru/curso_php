<?php
    /************************************************
     * Permiten comparar dos expresiones y devuelven*
     * TRUE o FALSE                                 *
     *  ==  - Igual, compara ambos valores          *
     *  === - Idéntico, en valor y tipo             *
     *  !=  - No son iguales                        *
     *  <>  - Diferentes                            *
     *  !== - No idénticos                          *
     *  <   - Menor que                             *
     *  <   - Mayor que                             *
     *  <=  - Menor o igual que                     *
     *  >=  - Mayor o igual que                     *
     * *********************************************/

     $variable1 = 2;

     var_dump($variable1 == "2"); // True
     var_dump($variable1 === "2"); // False
     var_dump($variable1 != 5); // True
     var_dump("hola" <> "adios"); // True
     var_dump(4 !== 4); // False
     var_dump(5 < 4); // False
     var_dump(5 >= 5); // True
