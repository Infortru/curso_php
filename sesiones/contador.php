<?php
    session_name("login");      //Nombre de la sesión debe ser la misma en todos los archivos
    session_start();            //Inicio de la sesión

    if (isset($_SESSION["contador"])) {
        $_SESSION["contador"]++;
    } else {
        $_SESSION["contador"] = 1;
    }
?>

<!DOCTYPE html>
<html lang="es"> 
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Contador</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php echo "Hola ".$_SESSION["nombre"]." ".$_SESSION["apellido"]." has recargado la página ".$_SESSION["contador"]." veces"; ?>
    <a href="cerrar.php">Cerrar sesión</a>
</body>
</html>