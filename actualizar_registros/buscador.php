<link rel='stylesheet' type='text/css' media='screen' href='main.css'>

<?php
    require_once("../acceso_BBDD/acceso_BBDD.php");

    $busca=$_GET["buscar"];

    $consulta="SELECT * FROM articulos WHERE NOMBRE LIKE '%$busca%'";     //La consulta en sql seleccionamos los datos y tabla a mostrar
    $resultado=mysqli_query($conexion, $consulta);  //Genera un array con el resultado de la consulta
   
    $fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    
    echo "<form action='actualiza.php' method='post'>";
    echo "Artículo: "; echo $fila["NOMBRE"] . "<br>";
    echo "Referencia " . "<input type='text' name='articulo' value='" . $fila['ID_ARTÍCULO'] . "'><br>";
    echo "Nombre " . "<input type='text' name='nombre' value='" . $fila['NOMBRE'] . "'><br>";
    echo "Sección " . "<input type='text' name='seccion' value='" . $fila['SECCIÓN'] . "'><br>"; 
    echo "Fecha " . "<input type='text' name='fecha' value='" . $fila['FECHA'] . "'><br>";
    echo "País " . "<input type='text' name='pais' value='" . $fila['PAÍS'] . "'><br>";
    echo "Precio " . "<input type='text' name='precio' value='" . $fila['PRECIO'] . "'><br>";
    echo "<input type='submit' value='Actualizar'>";

       
    //mysqli_close($conexion);        //Cierra la conexión
?>


