<?php
    //Podemos unir cadenas de texto, variables, etc

    $nombre = "Ramón ";
    $pais = "España";

    $concatenacion = $nombre.$pais;
    echo $concatenacion;
    echo "Me llamo ".$nombre." y vivo en ".$pais;
    echo "Me llamo $nombre y vivo en $pais"; //Interpolación de variables