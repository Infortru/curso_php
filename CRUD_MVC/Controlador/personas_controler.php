<?php

    require_once("Modelo/personas_model.php");

    $persona=new Personas_model();        //Instanciamos a Productos_model
    $matrizPersonas=$persona->get_personas(); //Crea un array con los productos

    require_once("Vista/personas_view.php");

