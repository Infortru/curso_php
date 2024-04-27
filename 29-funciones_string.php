<?php
    //Funciones predefinidas para el manejo de cadenas de texto

    $texto = "hola mundo";

    echo strtolower($texto);    //Convierte todas las letras en minúsculas
    echo strtoupper($texto);    //Convierte todo el texto a mayúsculas
    echo ucfirst($texto);       //Convierte la primera letra del texto a mayúscula
    echo ucwords($texto);       //Convierte la primera letra de cada palabra a mayúscula
    echo strlen($texto);        //Cuenta el número de caracteres
    echo str_word_count($texto);//Cuenta las palabras del texto
    
