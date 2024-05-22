<?php

    try{

        $base=new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM usuarios WHERE USUARIO = :usuario AND CONTRASEÑA = :contras";
        $resultado=$base->prepare($sql);
        $usuario=htmlentities(addslashes($_POST["usuario"]));
        $contras=htmlentities(addslashes($_POST["contrasenna"]));
        $resultado->bindValue(":usuario", $usuario);
        $resultado->bindValue(":contras", $contras);
        $resultado->execute();
        $existe=$resultado->rowCount();

        if($existe!=0){
            session_start();
            $_SESSION["usuario"]=$_POST["usuario"];
            header("location:usuario_registrado1.php");

        }else{
            header("location:login.php");
        }



    }catch(Exception $e){

        die("Error:" . $e->getMessage());

    }