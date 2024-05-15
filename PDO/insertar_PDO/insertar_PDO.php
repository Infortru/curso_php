
<link rel='stylesheet' type='text/css' media='screen' href='main.css'>

<?php

    $seccion=$_POST["seccion"];
    $nombre=$_POST["nombre"];
    $fecha=$_POST["fecha"];
    $pais=$_POST["pais"];
    $precio=$_POST["precio"];

    try{
        $conexion = new PDO ("mysql: host=localchost; dbname=pruebas", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="INSERT INTO articulos (SECCIÓN, NOMBRE, FECHA, PAÍS, PRECIO) VALUES (:seccion, :nombre, :fecha, :pais, :precio)";
        $resultado=$conexion->prepare($sql);
        $resultado->execute(array(":seccion"=>$seccion, ":nombre"=>$nombre, ":fecha"=>$fecha, ":pais"=>$pais, ":precio"=>$precio));
?>
        <table width="50%">
            <thead>
                <th>SECCIÓN</th>
                <th>ARTÍCULO</th>
                <th>FECHA</th>
                <th>PROCEDENCIA</th>
                <th>PRECIO</th>
            </thead>
   
            <tr>
            <tr>
                <td><?php echo $seccion; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $fecha; ?></td>
                <td><?php echo $pais; ?></td>
                <td><?php echo $precio; ?></td>
            </tr>
            
<?php     
        $resultado->closeCursor();
    }catch(Exception $e) {
        die ("Error" . $e->getMessage());
    }finally{
        $conexion=null;
    }
?>
        </table>
    