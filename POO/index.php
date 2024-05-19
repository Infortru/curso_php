<!DOCTYPE html>
<?php

    require "dev_productos.php";

    $productos=new devuelveProductos();
    $array_productos=$productos->get_productos();
?>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Listado de productos</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    </head>
    <body>
        <?php

            foreach($array_productos as $inventario){

                echo "<table><tr>";
                echo "<td>" . $inventario['ID_ARTÍCULO'] . "</td>";
                echo "<td>" . $inventario['SECCIÓN'] . "</td>";
                echo "<td>" . $inventario['NOMBRE'] . "</td>";
                echo "<td>" . $inventario['FECHA'] . "</td>";
                echo "<td>" . $inventario['PAÍS'] . "</td>";
                echo "<td>" . $inventario['PRECIO'] . "</td></tr></table";
            };
        ?>



    </body>
</html> 