<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel='stylesheet' type='text/css' media='screen' href='Vista/estilos.css'>
</head>
<body>
    <?php
        require("Modelo/paginacion.php");
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <table width="50%" border="none" text-align="center">
            <tr >
            <th class="primera_fila">Id</th>
            <th class="primera_fila">Nombre</th>
            <th class="primera_fila">Apellido</th>
            <th class="primera_fila">Dirección</th>
            <th class="sin">&nbsp;</th>
            <th class="sin">&nbsp;</th>
            <th class="sin">&nbsp;</th>
            </tr> 

        <?php

            foreach($matrizPersonas as $persona){ ?>
    
            <tr>
                <td><?php echo $persona["Id"] ?></td>
                <td><?php echo $persona["Nombre"] ?></td>
                <td><?php echo $persona["Apellido"] ?></td>
                <td><?php echo $persona["Direccion"] ?></td>
        
                <td class="bot"><a href="borrar.php?Id=<?php echo $persona["Id"] ?>">
                    <input type='button' name='del' id='del' value='Borrar'></a>
                </td>
                <td class='bot'><a href="editar.php?Id=<?php echo $persona["Id"] ?> &
                    nom=<?php echo $persona["Nombre"] ?> & ape=<?php echo $persona["Apellido"] ?> &
                    dir=<?php echo $persona["Direccion"] ?>">
                    <input type='button' name='up' id='up' value='Actualizar'></a></td>
            </tr>
        <?php } ?>       
            <tr>
                <td></td>
                <td><input type='text' name='Nom' size='10' class='centrado'></td>
                <td><input type='text' name='Ape' size='10' class='centrado'></td>
                <td><input type='text' name=' Dir' size='10' class='centrado'></td>
                <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>
            <tr><td colspan="4" class="pagina">Página</td></tr> 
            <tr><td colspan="4" class="pagina sin">
        <?php
            /************************Paginación**************************************/

                //El bucle for es para mostrar el nº de página

            for ($i=1; $i<=$total_paginas; $i++){

                echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
                    }
        ?>
                </td></tr>   
        </table>
    </form>

</body>
</html>