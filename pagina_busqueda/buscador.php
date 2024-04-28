
<?php
    require_once("../acceso_BBDD/acceso_BBDD.php");

    $busca=$_GET["buscar"];

    $consulta="SELECT * FROM articulos WHERE NOMBRE like '%$busca%'";     //La consulta en sql seleccionamos los datos y tabla a mostrar
    $resultado=mysqli_query($conexion, $consulta);  //Genera un array con el resultado de la consulta
    ?>
   

    <table width="50%">
        <thead>
            <th>SECCIÓN</th>
            <th>ARTÍCULO</th>
            <th>FECHA</th>
            <th>PROCEDENCIA</th>
            <th>PRECIO</th>
        </thead>
    <?php   while ($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {    //Para ver todos los registros de la tabla ?>
        <tr>
            <td><?php echo $fila["SECCIÓN"] ?></td>
            <td><?php echo $fila["NOMBRE"] ?></td>
            <td><?php echo $fila["FECHA"] ?></td>
            <td><?php echo $fila["PAÍS"] ?></td>
            <td><?php echo $fila["PRECIO"] ?></td>
        </tr>
    
   <?php }

    mysqli_close($conexion);        //Cierra la conexión

?>
</table>

</body>
</html>