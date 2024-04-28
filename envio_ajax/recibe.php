<?php
    //Este archivo se encarga de recibir los documentos del formulario y enviarlo a una carpeta para alamcenarlos

    if(mime_content_type($_FILES["archivo"]["tmp_name"])!="image/jpeg" && mime_content_type($_FILES["archivo"]["tmp_name"])!="image/png"){
        echo "Formato de archivo no válido";
        exit;           //Definimos el tipo de archivo válido
    }

    if($_FILES["archivo"]["size"]/1024 >= 6000) {
        echo "Archivo muy grande";
        exit;           //Definimos el tamaño máximo del archivo
    }
    
    if(!file_exists("almacen")) {       //Si la carpeta de destino no está creada, la creamos aquí
        if(!mkdir("almacen", 0777)) {
            echo "Error al crear el directorio";
            exit();
        }
    }

    chmod("almacen", 0777);

    if (move_uploaded_file($_FILES["archivo"]["tmp_name"], "almacen/".$_FILES["archivo"]["name"])) {
        echo "Archivo subido correctamente";        //Ratificamos la subida correcta del documento
    } else {
        echo "No se ha podido subir el archivo";    //Informamos de un error
    }