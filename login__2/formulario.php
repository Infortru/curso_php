<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <h2>Por favor, identifícate para acceder</h2>
        <label for="usuario" class="izquierda usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario" class="derecha">
        <label for="contrasenna" class="izquierda contrasenna">Contraseña: </label>
        <input type="password" name="contrasenna" id="contrasenna" class="derecha">
        <input type="submit" id="enviar" name="enviar" value="Login">
    </form>
</body>
</html>