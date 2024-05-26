<?php

    if(isset($_COOKIE["prueba"])){
        echo $_COOKIE["prueba"];
    }else{
        echo "No hay cookie";
    }   