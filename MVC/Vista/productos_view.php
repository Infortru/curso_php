<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MVC</title>
    <link rel='stylesheet' type='text/css' media='screen' href='Vista/estilos.css'>
</head>
<body>

    <table>
        <tr><th>Nombre del artículo</th></tr>
    
    <?php
    
        foreach($matrizProductos as $registro){

            echo "<tr><td>" . $registro["NOMBRE"] . "</td></tr>";
        }
    
    ?>
    </table>
</body>
</html>