<?php
    $criterio;

    //Para evitar inyección de sql podemos utilizar la función mysqli_prepare
    //En primer lugar creamos la consulta sustituyendo el criterio por ?

    $consulta="SELECT * FROM  nombre de la base de datos WHERE criterio a buscar= ?";

    //Después preparamos la consulta

    $resultado=mysqli_prepare($conexion, $consulta);    //Devuelve el objeto de tipo mysqli_stmt

    //Ahora unimos los parámetros a la sentencia sql

    $union=mysqli_stmt_bind_param($resultado,"tipo de dato del criterio", $criterio);

    //Ejecutamos la consulta

    $union=mysqli_stmt_execute($resultado);

    //Asociamos los campos de la tabla a los resultados de la consulta

    $union=mysqli_stmt_bind_result($resultado, $columnas);

    //Leemos los valores

    while (mysqli_stmt_fetch($resultado)) {
        echo""; //Imprimimos el resultado de la consulta
    };