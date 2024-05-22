<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <title>Login_2</title>
</head>
<body>
    <?php
        if(isset($_POST["enviar"])){
            try{

                $base=new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
                $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql="SELECT * FROM usuarios WHERE USUARIO = :usuario AND CONTRASEÑA = :contras";
                $resultado=$base->prepare($sql);
                $usuario=htmlentities(addslashes($_POST["usuario"]));
                $contras=htmlentities(addslashes($_POST["contrasenna"]));
                $resultado->bindValue(":usuario", $usuario);
                $resultado->bindValue(":contras", $contras);
                $resultado->execute();
                $existe=$resultado->rowCount();

                if($existe!=0){
                    session_start();
                    $_SESSION["usuario"]=$_POST["usuario"];
                }
            }catch(Exception $e){

            die("Error:" . $e->getMessage());

            }
        }
        if(!isset($_SESSION["usuario"])){
            include("formulario.php");
        }else{
            echo "Usuario registrado";
        }
    ?>
</body>
</html>