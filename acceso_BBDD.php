<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Acceso a Bases de Datos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>

    <?php
            //Variables de la conexión

        $host="localhost";      //Direción donde está alojada la base de datos
        $nombre="pruebas";      //Nombre de la base de datos
        $usuario="root";        //Nombre de usuario
        $contra="";             //Contraseña de la base de datos
        
        $conexion=mysqli_connect($host, $usuario, $contra, $nombre);    //Establece la conexión a la base de datos

        if (mysqli_connect_errno()) {                                   //Por si hay un error en la conexión puede seguir
            echo "Error al conectar con la base de datos";              //ejecutándose el resto de la página
            exit;
        };

        mysqli_select_db($conexion, $nombre) or die ("No se encuentra la BBDD");    //Si no se encuetra la BBDD manda un mensje de error
        $consulta="SELECT * FROM datos_personales";     //La consulta en sql seleccionamos los datos y tabla a mostrar
        $resultado=mysqli_query($conexion, $consulta);  //Genera un array con el resultado de la consulta
        
        while ($fila=mysqli_fetch_row($resultado)) {    //Para ver todos los registros de la tabla

            echo $fila[0] . " ";
            echo $fila[1] . " ";
            echo $fila[2] . " ";
            echo $fila[3];
            echo "<br>";
        };

        mysqli_close($conexion);        //Cierra la conexión

    ?>

</body>
</html>