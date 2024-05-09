<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Acceso a BBDD con POO</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php

    $conexion = new mysqli("localhost", "root", "", "pruebas");

    if ($conexion->connect_errno) {
        echo "No se ha podido conectar con la base de datos " . $conexion->connect_errno;
    };

    $consulta = "SELECT * FROM articulos";

    $resultado = $conexion->query($consulta);

    if ($conexion->errno) {
        die ($conexion->error);
    }
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
<?php
    while ($fila=$resultado->fetch_assoc()) {   ?>

<tr>
                <td><?php echo $fila["ID_ARTÍCULO"] ?></td>
                <td><?php echo $fila["SECCIÓN"] ?></td>
                <td><?php echo $fila["NOMBRE"] ?></td>
                <td><?php echo $fila["FECHA"] ?></td>
                <td><?php echo $fila["PAÍS"] ?></td>
                <td><?php echo $fila["PRECIO"] ?></td>
            </tr>

<?php }

    $conexion->close();
?>


    
</body>
</html>