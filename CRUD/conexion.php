<?php

    try{
            $base=new PDO ("mysql: host=localchost; dbname=pruebas", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET UTF8");
    }catch(Exception $e){
        echo "Línea del error: " . $e->getLine();
        die("error: " . $e->getMessage());
    }
       
