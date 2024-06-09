<?php

    require_once("Modelo/productos_model.php");

    $producto=new Productos_model();        //Instanciamos a Productos_model
    $matrizProductos=$producto->get_productos(); //Crea un array con los productos
    require_once("Vista/productos_view.php");

