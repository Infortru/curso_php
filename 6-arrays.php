<?php

    /************************************************************************************

    Un array es un tipo especial de datos que representa los llamados
    mapas ordenados de datos. Un mapa es un tipo de datos que asocia valores con claves.
    Los datos pueden ser de cualquier tipo, pueden estar formados por otros array.
    PHP soporta arrays escalares, arrays asociativos y arrays multidimensionales.
    Para acceder a los elementos se utilizan los corchetes.
    No es necesario definir un array antes de usarlo.

    *************************************************************************************/

    //Los arrays los podemos definir de dos formas: utilizando la palabra "array()" o con corchetes []

        //Array escalar con "array"
        $nombres = array ("Ramón", "Antonio", "María", "Josefa");
        echo $nombres[2];

        //Podemos modificar uno de valores accediendo a su posición (empezando desde 0)
        $nombres[2] = "Noelia";
        echo $nombres[2];

        //Array escalar con corchetes
        $nombres = ["Ramón", "Antonio", "María", "Josefa"];
        echo $nombres[2];

        //Arrays asociativos (asociamos una valor a una clave)
        $estudiante = [
            "nombre" => "Ramón",
            "apellido" => "Trujillo",
            "edad" => "53"
        ];
            //Podemos modificar su valor
        $estudiante["edad"] = 52;
        echo $estudiante["edad"];

        //Arrays multidimensionales (formado por otros arrays)
        $estudiante2 = [
            "nombre" => "José",
            "apellido" => "Benimeli",
            "edad" => 44,
            "cursos" => [
                "PHP",
                "HTML",
                "CSS"
            ]
        ];
        echo $estudiante2["cursos"][2]; // Accedemos a CSS

            //Podemos añadir claves/valor
        $estudiante2["país"] = "ESpaña";
        echo $estudiante2["país"];

    //La función count cuenta los elementos de un array
    echo count($estudiante2);
    echo count($estudiante2, COUNT_RECURSIVE); //Incluye los elementos del subarray
        


