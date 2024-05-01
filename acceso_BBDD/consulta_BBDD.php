<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Consulta BBDD</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php

        require_once("acceso_BBDD.php");

        $consulta="SELECT * FROM articulos";     //La consulta en sql seleccionamos los datos y tabla a mostrar
        $resultado=mysqli_query($conexion, $consulta);  //Genera un array con el resultado de la consulta
        ?>
       

        <table width="50%">
            <thead>
                <th>REFERENCIA<th>
                <th>SECCIÓN</th>
                <th>ARTÍCULO</th>
                <th>FECHA</th>
                <th>PROCEDENCIA</th>
                <th>PRECIO</th>
            </thead>
        <?php   while ($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {    //Para ver todos los registros de la tabla ?>
            <tr>
                <td><?php echo $fila["ID_ARTÍCULO"] ?></td>
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