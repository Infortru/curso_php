<?php
    // Aquí se comprueban los datos de inicio de sesión
    

    if ($_POST["usuario"] == "Ramón" && $_POST["contraseña"] == "1234") {

        session_name("login");      //Nombre de la sesión debe ser la misma en todos los archivos
        session_start();            //Inicio de la sesión

        $_SESSION["nombre"] = "Ramón";
        $_SESSION["apellido"] = "Trujillo";
        $_SESSION["pais"] = "España";
                                    //Redirecciona al usuario a otra página
        if (headers_sent()) {       //Comprobamos si hay encabezados enviados o salidas de texto
            echo "<script>window.location.href='contador.php'</script>";
        } else {
            header("Location:contador.php"); 
        }   
    } else {
        echo "Inicio de sesión incorrecto";
    }
