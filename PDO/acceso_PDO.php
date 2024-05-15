<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Acceso a BBDD con PDO</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
    </head>
    <body>

    <?php
        try{
            $conexion = new PDO ("mysql: host=localchost; dbname=pruebas", "root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexión OK";
        }catch(Exception $e) {
            die ("Error" . $e->getMessage());
        }finally{
            $conexion=null;
        }
    ?>
    </body>
</html>