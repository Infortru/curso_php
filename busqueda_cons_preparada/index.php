<!DOCTYPE html>

<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Búsqueda</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <script src='main.js'></script>
    </head>
    <body>
        <form action="buscador.php" method="get">
            <h2>Formulario de búsqueda</h2>
            <label for="buscar">Buscar: </label><input type="text" name="buscar" pklaceholder="Introduce un término de búsqueda">
            <br><br>
            <input type="submit" value="Buscar" class="boton enviar">
            <input type="reset" value="Limpiar" class="boton limpiar">
        </form>
    </body>
</html>