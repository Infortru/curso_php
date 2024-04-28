<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
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
                <th>SECCIÓN</th>
                <th>ARTÍCULO</th>
                <th>FECHA</th>
                <th>PROCEDENCIA</th>
            </thead>
        <?php   while ($fila=mysqli_fetch_row($resultado)) {    //Para ver todos los registros de la tabla ?>
            <tr>
                <td><?php echo $fila[0] ?></td>
                <td><?php echo $fila[1] ?></td>
                <td><?php echo $fila[2] ?></td>
                <td><?php echo $fila[3] ?></td>
            </tr>
        
       <?php }

        mysqli_close($conexion);        //Cierra la conexión

    ?></table>

</body>
</html>