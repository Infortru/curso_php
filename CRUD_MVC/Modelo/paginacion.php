<?php

    require_once("conectar.php");
    $base=Conectar::conexion();

    $tamanno_pagina=3;      //definimos el número de registros por página

        if(isset($_GET["pagina"])){     //Este bloque se ejecuta si seleccionamos una página
            if($_GET["pagina"]==1){
                header("Location:index.php"); //Si seleccionamos la página 1 nos envía a esta página
            }else{
                $pagina=$_GET["pagina"];
            }
        }else{
            $pagina=1;              //El número de página actual
        }
        
        $empezar_desde=($pagina-1)*$tamanno_pagina; //Calcula el registro inicial de la página

        $sql_total="SELECT * FROM datos_usuarios";

        $resultado=$base->prepare($sql_total);
        $resultado->execute(array());

        $num_filas=$resultado->rowCount();  //Cuenta el número de registros de la consulta
        $total_paginas=ceil($num_filas/$tamanno_pagina);    //Calcula el nº total de páginas
