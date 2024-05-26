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

        $autenticado=false;

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
                    $autenticado=true;
                    if(isset($_POST["recordar"])){
                        setcookie("nombre_usuario", $_POST["usuario"], time()+90000);
                    };
                }else{
                    echo "Usuario incorrecto";
                }
                    
            }catch(Exception $e){

            die("Error:" . $e->getMessage());

            }
        }
        if($autenticado==false){
            if(!isset($_COOKIE["nombre_usuario"])){
                include("formulario.php");
            }
        }
        if($autenticado==true || isset($_COOKIE["nombre_usuario"])){
               header("location:pagina_1.php");
        }
    ?>
    
</body>
</html>