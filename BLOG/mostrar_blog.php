<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>

    <body>

    <?php

        $conexion=mysqli_connect("localhost", "root", "", "bbddblog");

        //Comprobar conexión

        if(!$conexion){

            echo "La conexión ha fallado: " . mysqli_connect_error();

            exit();
        }

        $consulta="SELECT * FROM contenido ORDER BY Fecha DESC";

        if($resultado=mysqli_query($conexion, $consulta)){

            while($registros=mysqli_fetch_assoc($resultado)){

                echo "<h3>" . $registros["Titulo"] . "</h3>";
                echo "<h4>" . $registros["Fecha"] . "</h4>";
                echo "<div style='width: 400px'>" . $registros["Comentario"] . "</div>";

                if($registros["Imagen"]!=""){

                    echo "<img src='imagenes/" . $registros["Imagen"] . "'width= 350px' 'height=300px' />";
                }

                echo "<hr>";


            }
        }

    ?>
    </body>