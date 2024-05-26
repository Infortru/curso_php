<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ejemplo1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>
<body>
    <?php

        if(isset($_COOKIE["idioma_seleccionado"])=="es"){
            header("location:español.php");
        }else if(isset($_COOKIE["idioma_seleccionado"])=="in"){
            header("location:ingles.php");
        }
            


    ?>
    <h3>Elige el idioma</h3>
    <div id="españa" class="bandera"><a href="crea_cookie.php?idioma=es">
        <img src="imagenes/bandera_esp.png"></a>
    </div>
    <div id="inglaterra" class="bandera"><a href="crea_cookie.php?idioma=in">
        <img src="imagenes/bandera_ing.png"></a>
    </div>
    
</body>
</html>