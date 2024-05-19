<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
   
    <form action="comprueba_login.php" method="post">
        <h2>Por favor, identifícate para acceder</h2>
        <label for="usuario" class="izquierda usuario">Usuario: </label>
        <input type="text" name="usuario" id="usuario" class="derecha">
        <label for="contrasenna" class="izquierda contrasenna">Contraseña: </label>
        <input type="password" name="contrasenna" id="contrasenna" class="derecha">
        <input type="submit" id="enviar" value="Login">
    </form>
</body>
</html>