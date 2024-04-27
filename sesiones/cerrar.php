<?php
    //Aquí cerramos la sesión

    session_name("login");      //Nombre de la sesión debe ser la misma en todos los archivos
    session_start();            //Inicio de la sesión
    session_destroy();          //Destruimos todos los datos almacenados de la sesión
                                //Al cerrrar sesión envía al usuario a la página inicial
    if (headers_sent()) {       //Comprobamos si hay encabezados enviados o salidas de texto
        echo "<script>window.location.href='index.php'</script>";
    } else {
        header("Location:index.php"); 
    }    