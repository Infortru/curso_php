<?php
    //Ejecuta una parte de código mientras la condición sea verdadera

   $contador = 1;

    while ($contador <= 20) { //Cuenta del 1 al 20
        echo "{$contador} ";
        $contador++;    //Incrementa el contador, si no entrariamos en un bucle infinito
    }
   
    
    $contador = 1;
    $numero = 8;

    echo "<br>";
    while ($contador <= 10) {   //Muestra la tabla de multiplicar del número indicado
        $resultado = $contador * $numero;
        echo "{$contador} X {$numero} = {$resultado} <br>";
        $contador++;
    }