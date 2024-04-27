<?php

    $nombre = $_POST["nombre"];
    $marca = $_POST["marcas"];
    $motor = $_POST["motor"];

    foreach ($marca as $marcas) {
        
    
    echo "Nombre:  ".$nombre." coche: ".$marcas." motor: ".$motor."<br>";
    }