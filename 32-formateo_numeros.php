<?php
    //Formatear números
    // number_format(cantidad, número_decimales, separador_decimales, separador_millar)
    $cantidad_1 = 11234.8;
    $cantidad_2 = 2345.67;

    echo number_format($cantidad_1)."<br>";  //Con un parámetro quita los decimales y añade el separador de millar
    echo number_format($cantidad_1, 2)."<br>";  //Ahora con 2 decimales
    echo number_format($cantidad_2, 2,",", ".")."<br>"; //Definimos también el separador de decimales y millares
