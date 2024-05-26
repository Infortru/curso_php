<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Página principal</h2>
    <h3>Para usuarios registrados</h3><br><br>
    <?php
    if(isset($_COOKIE["nombre_usuario"])){
        echo '<form action="eliminar_cookie.php" method="post">
        <input type="submit" name="eliminar" value="Salir">
        <input type="text" name="usuario" value="$_COOKIE["nombre_usuario"]" hidden="true">
        </form>';
    }
    ?>
</body>
</html>