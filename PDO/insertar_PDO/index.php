<!DOCTYPE html>

<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Introducción registro</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='intro_datos.css'>
    </head>
    <body>
    <form action="insertar_PDO.php" method="post">
            <h2>Introducción de nuevo registro</h2>
            <label for="seccion" class="izquierda">Sección: </label>
            <input type="text" name="seccion" placeholder="Introduce una sección" id="seccion">
            <br>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" placeholder="Introduce un nombre de artículo" id="nombre">
            <br>
            <label for="fecha">Fecha: </label>
            <input type="text" name="fecha" placeholder="Introduce la fecha" id="fecha">
            <br>
            <label for="pais">País: </label>
            <input type="text" name="pais" placeholder="Introduce el país de procedencia" id="pais">
            <br>
            <label for="precio">Precio: </label>
            <input type="text" name="precio" placeholder="Precio del artículo" id="precio">
            <br>
            <input type="submit" value="Enviar" class="boton enviar">
            <input type="reset" value="Limpiar" class="boton limpiar">
        </form>
    </body>
</html>