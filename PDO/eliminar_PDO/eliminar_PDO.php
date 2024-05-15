
<link rel='stylesheet' type='text/css' media='screen' href='main.css'>

<?php

    $articulo=$_POST["articulo"];
    

    try{
        $conexion = new PDO ("mysql: host=localchost; dbname=pruebas", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="DELETE FROM articulos WHERE ID_ARTÍCULO=:artic";
        $resultado=$conexion->prepare($sql);
        $resultado->execute(array(":artic"=>$articulo));
        echo "Registro " . $articulo . " eliminado";
        $resultado->closeCursor();
    }catch(Exception $e) {
        die ("Error" . $e->getMessage());
    }finally{
        $conexion=null;
    }
?>
    