<?php
    //Un hash convierte un bloque de datos en una serie de caracteres fija
    
    $clave = "Hola Mundo 1234";

    $clave_encriptada = password_hash($clave, PASSWORD_DEFAULT);

    if (password_verify($clave, $clave_encriptada)) { //Compara si ambas claves son iguales, para utilizar en login's
        echo"Contraseña correcta";
    }else{
        echo "Contraseña incorrecta";
    };