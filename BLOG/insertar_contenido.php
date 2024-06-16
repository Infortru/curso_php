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
    
        //Comprobamos errores en la subida de archivos

        if($_FILES["imagen"]["error"]){

            switch ($_FILES["imagen"]["error"]){

                case 1: //Excede el tamaño permitido por phph.ini
                    echo "El archivo excede el tamaño permitido por el servidor.";
                break;

                case 2: //Excede el tamaño fijado en el formulari0 (2MB)
                    echo "El archivo excede de 2MB.";
                break;

                case 3: // El archivo no se subió correctamente
                    echo "El archivo no ha subido correctamente.";
                break;

                case 4: //No se sube ningún archivo
                    echo "No has seleccionado ningún archivo.";
                break;
            }
        }else{

            echo "Subida exitosa: ";

            if((isset($_FILES["imagen"]["name"]) && ($_FILES["imagen"]["error"]==UPLOAD_ERR_OK))){

                $destino_ruta="imagenes/";  //Si no hay error las imágenes se guardan en esta carpeta

                move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino_ruta . $_FILES["imagen"]["name"]);

                echo "El archivo " . $_FILES["imagen"]["name"] . " se ha guardado en la carpeta correspondiente. <br>";

            }else{

                echo "El archivo no se ha podido guardar en el directorio de imágenes.";
            };
        };

        $titulo=$_POST["campo_titulo"];
        $fecha=date("Y-m-d H:i:s");
        $comentario=$_POST["area_comentarios"];
        $imagen=$_FILES["imagen"]["name"];

        $consulta="INSERT INTO contenido (Titulo, Fecha, Comentario, Imagen) VALUES ('" . $titulo . "', '" . $fecha . "',
            '" . $comentario . "', '" . $imagen . "')";
 
        $resultado=mysqli_query($conexion, $consulta); //Ejecutamos la inserción del registro

        mysqli_close($conexion);        //Cerramos la conexión

        echo "Se ha agregado el comentario con éxito. <br><br>";
    
    ?>

        <a href="index.php">Inicio</a><br>
        <a href="mostrar_blog.php">Ver Blog</a>
        
    </body>
</html>