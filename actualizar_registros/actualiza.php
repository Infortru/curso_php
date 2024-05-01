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

        require_once("../acceso_BBDD/acceso_BBDD.php");

        $articulo=$_POST["articulo"];
        $seccion=$_POST["seccion"];
        $nombre=$_POST["nombre"];
        $fecha=$_POST["fecha"];
        $pais=$_POST["pais"];
        $precio=$_POST["precio"];

        $actualiza="UPDATE articulos SET ID_ARTÍCULO='$articulo', SECCIÓN='$seccion', NOMBRE='$nombre',
             FECHA='$fecha', PAÍS='$pais', PRECIO='$precio' WHERE ID_ARTÍCULO='$articulo'";
        $resultado=mysqli_query($conexion, $actualiza);
        
        $consulta="SELECT * FROM articulos";
        $consultado=mysqli_query($conexion, $consulta);
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
    <?php   while ($fila=mysqli_fetch_array($consultado, MYSQLI_ASSOC)) {     ?>
        <tr>
            <td><?php echo $fila["ID_ARTÍCULO"] ?></td>
            <td><?php echo $fila["SECCIÓN"] ?></td>
            <td><?php echo $fila["NOMBRE"] ?></td>
            <td><?php echo $fila["FECHA"] ?></td>
            <td><?php echo $fila["PAÍS"] ?></td>
            <td><?php echo $fila["PRECIO"] ?></td>
        </tr>

    <?php };

    mysqli_close($conexion);        //Cierra la conexión

    ?>
    </table>

    </body>
</html>