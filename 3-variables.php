<?php
    //Todas las variables enpiezan con $ seguido de una letra o _  pero no con un número

    $nombre = "Ramón";

    echo $nombre;

    //Son sensibles a mayúsculas y minúsculas

    $Nombre = "Antonio";

    //Camel case

        //Upper camel case
        $NombreCompleto = "Ramón Trujillo";

        //Lower camel case
        $nombreCompleto = "Ramón Trujillo";

        //Upper case

        $NOMBRECOMPLETO = "Ramón Trujillo"; //Se suele usar para las constantes

        //Snake case

        $nombre_completo = "Ramón Trujillo";

        //Screaming snake case

        $NOMBRE_COMPLETO = "Ramón Trujillo"; //Se suele usar para las constantes

    /* Variables predefinidas
        $GLOBALS - Hace referencia a todas las variables disponibles
        $_SERVER - Información del entorno del servidor y de ejecución
        $_GET - Variables HTTP GET
        $_POST - Variables POST de HTTP
        $-FILES - Variables de subida de ficheros
        $_REQUEST - Variables HTTP Request
        $_SESSION - Variables de sesión
        $_ENV - Variables de entorno
        $_COOKIE - Cookies HTTP
        $php_errormsg - El mensaje de error anterior
        $HTTP_RAW_POST_DATA - Datos POST sin tratar
        $http_response_header - Encabezados de respuesta HTTP
        $argc - El número de argumentos pasados a un script
        $argv - Array de argumentos pasados a un script
        $this - Palabra reservada en programación orientada a objetos (POO)
    */