


<?php

    $nombre=$_POST["nombre"];
    $contra=$_POST["contra"];
    $contador=0;

    try{
        $conexion = new PDO ("mysql: host=localchost; dbname=pruebas", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM usuarios WHERE USUARIO = :nombre";
        $resultado=$conexion->prepare($sql);
        $resultado->execute(array(":nombre"=>$nombre));
        

        while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
            if(password_verify($contra, $fila['CONTRASEÑA'])){
                $contador++;
            }
        }
        if($contador>0){
            echo "Usuario registrado";
        }else{
            echo "Usuario no registrado";
        }
        $resultado->closeCursor();
    }catch(Exception $e) {
        die ("Error" . $e->getMessage());
    }finally{
        $conexion=null;
    }
?>
       
    