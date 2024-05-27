<?php

    $nombre=$_POST["nombre"];
    $Contrasenna=$_POST["contra"];
    $contra_enc=password_hash($Contrasenna, PASSWORD_DEFAULT, array("cost"=>15));

    try{
        $conexion = new PDO ("mysql: host=localchost; dbname=pruebas", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="INSERT INTO usuarios (USUARIO, CONTRASEÑA) VALUES (:nombre, :contrasenna)";
        $resultado=$conexion->prepare($sql);
        $resultado->execute(array(":nombre"=>$nombre, ":contrasenna"=>$contra_enc));

        echo "Registro insertado";

        $resultado->closeCursor();

    }catch(Exception $e) {
        die ("Error" . $e->getMessage());
    }finally{
        $conexion=null;
    };