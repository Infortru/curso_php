
<link rel='stylesheet' type='text/css' media='screen' href='main.css'>

<?php

    $buscar=$_POST["buscar"];

    try{
        $conexion = new PDO ("mysql: host=localchost; dbname=pruebas", "root", "");
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM articulos WHERE NOMBRE = :nombre";
        $resultado=$conexion->prepare($sql);
        $resultado->execute(array(":nombre"=>$buscar));
?>
        <table width="50%">
            <thead>
                <th>SECCIÓN</th>
                <th>ARTÍCULO</th>
                <th>FECHA</th>
                <th>PROCEDENCIA</th>
                <th>PRECIO</th>
            </thead>
   
<?php 

        while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){
?>
            <tr>
                <td><?php echo $fila["SECCIÓN"] ?></td>
                <td><?php echo $fila["NOMBRE"] ?></td>
                <td><?php echo $fila["FECHA"] ?></td>
                <td><?php echo $fila["PAÍS"] ?></td>
                <td><?php echo $fila["PRECIO"] ?></td>
            </tr>
        
<?php     
        }
        $resultado->closeCursor();
    }catch(Exception $e) {
        die ("Error" . $e->getMessage());
    }finally{
        $conexion=null;
    }
?>
        </table>
    