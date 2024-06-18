<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Entradas del blog</title>
    </head>
    <body>

    <?php

        include_once("../modelo/manejo_objeto.php");

        try{

            $conexion=new PDO("mysql:host=localhost; dbname=bbddblog", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $manejo_objeto=new Manejo_objeto($conexion);
            $tabla=$manejo_objeto->getContenidoPorFecha();

            if(empty($tabla)){

                echo "No hay entradas en el blog";

            }else{

                foreach($tabla as $valor){

                    echo "<h3>" . $valor->getTitulo() . "</h3>";
                    echo "<h4>" . $valor->getFecha() . "<H4>";
                    echo "<div style='width:400px'>" . $valor->getComentario() . "</div>";
                    if($valor->getImagen()!=""){

                        echo "<img src='../imagenes/" .  $valor->getImagen() . "' width='300px' height='200px' />";
                    }
                    echo "<hr>";
                }

            }

        }catch(Exception $e){

            die("Error: " . $e->getMessage());
        }
        
    ?>

        <a href="index.php">Volver al inicio</a>
        
    </body>
</html>