<link rel='stylesheet' type='text/css' media='screen' href='intro_datos.css'>

<?php
    require_once("../acceso_BBDD/acceso_BBDD.php");

    $id=mysqli_real_escape_string($conexion, $_POST["articulo"]);

    $borrado="DELETE FROM articulos WHERE ID_ARTÍCULO='$id'";
    $resultado=mysqli_query($conexion, $borrado);  
    
    if (mysqli_affected_rows($conexion)==0){
        echo "El artículo introducido no existe";
    } else if (mysqli_affected_rows($conexion)==1){
        echo "Se ha eliminado 1 artículo";
    } else {
        echo "Se han eliminado " . mysqli_affected_rows($conexion) . " registros";
    };

    mysqli_close($conexion);        //Cierra la conexión
?>

</table>