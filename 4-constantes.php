<?php

    //Existen dos modos de declarar las constantes, pero la más actual es la segunda "const"
    //Una vez definida una constante no se puede variar su valor
    define("NOMBRE", "Ramón");
    echo NOMBRE;

    const APELLIDO = "Trujillo";
    echo APELLIDO;

    /*******************************************************************************************
    * Existen variables predefinidas en el lenguaje                                            *
    * __LINE-- - El número de línea actual en el fichero                                       *
    * __FILE__ - Ruta completa y nombre del fichero con enlaces simbólicos resueltos           *
    * __DIR__ - Directorio del fichero                                                         *
    * __FUNCTION__ - Nombre de función                                                         *
    * __CLASS__ - Nombre de la clase. El nombre e la clase incluye el namespace declarado      *
    * __TRAIT__ - El nombre del trait, incluye el espacio de nombres en el que fue declarado   *
    * __METHOD__ - Nombre del método de clase                                                  *
    * __NAMESPACE__ - Nombre del espacio de nombres actual                                     *
    * ClassName::class - El nombre de clase completamente cualificado                          *
    *******************************************************************************************/

    //Podemos definir una constante con un array

    define ("ALUMNOS", array("Carlos", "Ramón", "María"));

    echo ALUMNOS[2];