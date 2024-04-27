<?php
    // Una función es un trozo de código que podemos ejecutar cuando queramos, puede recibir parámetros
    // El nombre de función debe comenzar por letra o guion bajo

    function saludo($nombre) {    //Declaración de la función
       return "Hola me llamo $nombre  ";
    };

    echo saludo("Ramón");    //Llamada de la función tantas veces como queramos y podemos pasar
    $usuario = "Tomás";      //los parámetros de diferentes formas
    echo saludo($usuario);      
    echo saludo($nombre = "Jaime"); 