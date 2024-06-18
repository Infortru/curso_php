<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php

    include_once("../Modelo/objeto_blog.php");
    include_once("../Modelo/manejo_objeto.php");

    try{

        $conexion=new PDO("mysql:host=localhost; dbname=bbddblog", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

                $destino_ruta="../imagenes/";  //Si no hay error las imágenes se guardan en esta carpeta

                move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino_ruta . $_FILES["imagen"]["name"]);

                echo "El archivo " . $_FILES["imagen"]["name"] . " se ha guardado en la carpeta correspondiente. <br>";

            }else{

                echo "El archivo no se ha podido guardar en el directorio de imágenes.";
            };
        };

        $manejo_objeto=new Manejo_objeto($conexion);
        $blog=new Objeto_blog();

        $blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]), ENT_QUOTES));
        $blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]), ENT_QUOTES));
        $blog->setImagen($_FILES["imagen"]["name"]);
        $blog->setFecha(date("Y-m-d H:i:s"));

        $manejo_objeto->insertarContenido($blog);

        echo "<br> Entrada agregada con éxito <br>";
        echo "<a href='../Vista/mostrar_blog.php'>Ver entradas del blog</a><br>";
        echo "<a href='../Vista/index.php'>Nueva entrada</a>";


    }catch(Exception $e){

        die("Error: " . $e->getMessage());
    }   

?>
</body>
</html>