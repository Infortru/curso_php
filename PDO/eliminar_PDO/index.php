<!DOCTYPE html>

<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Eliminar artículo</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='eliminar.css'>
    </head>
    <body>
    <form action="eliminar_PDO.php" method="post">
            <h2>Eliminar artículo</h2>
            <label for="articulo" class="izquierda">Código del artículo: </label>
            <input type="text" name="articulo" id="articulo">
            <br><br>
            <input type="submit" value="Enviar" class="boton enviar">
            <input type="reset" value="Limpiar" class="boton limpiar">
        </form>
    </body>
</html>