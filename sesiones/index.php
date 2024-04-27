<?php
    session_name("login");  //Nombre de la sesión debe ser la misma en todos los archivos
    session_start();        //Inicio de la sesión
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Index</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <form action="login.php" method="POST">
        <label>Usuario</label>
        <input type="text" name="usuario"><br>
        <label>Contraseña</label>
        <input type="password" name="contraseña"><br>
        <input type="submit">
    </form>
</body>
</html>