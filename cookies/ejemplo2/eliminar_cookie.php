<?php

    $usuario_eliminar=$_POST["usuario"];

    setcookie("nombre_usuario", $usuario_eliminar, time()-1);
    header("location:index.php");