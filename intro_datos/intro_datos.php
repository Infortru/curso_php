<link rel='stylesheet' type='text/css' media='screen' href='intro_datos.css'>

<?php
    require_once("../acceso_BBDD/acceso_BBDD.php");

    $seccion=$_POST["seccion"];
    $nombre=$_POST["nombre"];
    $fecha=$_POST["fecha"];
    $pais=$_POST["pais"];
    $precio=$_POST["precio"];

    $insercion="INSERT INTO articulos (SECCIÓN, NOMBRE, FECHA, PAÍS, PRECIO)
        VALUES ('$seccion', '$nombre', '$fecha', '$pais', '$precio')";     
    $resultado=mysqli_query($conexion, $insercion);  
    
    if ($resultado){
?>
   
   
    <table width="50%">
        <caption>Datos introducidos con éxito</caption>
        <thead>
            <th>SECCIÓN</th>
            <th>ARTÍCULO</th>
            <th>FECHA</th>
            <th>PROCEDENCIA</th>
            <th>PRECIO</th>
        </thead>
    
        <tr>
            <td><?php echo $seccion; ?></td>
            <td><?php echo $nombre; ?></td>
            <td><?php echo $fecha; ?></td>
            <td><?php echo $pais; ?></td>
            <td><?php echo $precio; ?></td>
        </tr>
<?php
    } else {
        echo "Error en la introducción de datos";
    };
    mysqli_close($conexion);        //Cierra la conexión
?>

</table>