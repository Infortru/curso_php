
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
    ?>
