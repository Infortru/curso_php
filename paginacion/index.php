<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Paginación</title>
        <link rel="stylesheet" type="text/css" href="hoja.css">
    </head>

    <body>

    <?php

        try{
        $base=new PDO("mysql:host=localhost; dbname=pruebas", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET utf8");

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

        $sql_total="SELECT NOMBRE, SECCIÓN, PRECIO, PAÍS FROM articulos WHERE SECCIÓN='DEPORTE'";

        $resultado=$base->prepare($sql_total);
        $resultado->execute(array());

        $num_filas=$resultado->rowCount();  //Cuenta el número de registros de la consulta
        $total_paginas=ceil($num_filas/$tamanno_pagina);    //Calcula el nº total de páginas

        echo "Nº de registros de la consulta: " . $num_filas . "<br>";
        echo "Mostramos " . $tamanno_pagina . " registros por página <br>";
        echo "Mostrando la página " . $pagina . " de " . $total_paginas . "<br>";

        $resultado->closeCursor();

        $sql_limite="SELECT NOMBRE, SECCIÓN, PRECIO, PAÍS FROM articulos WHERE SECCIÓN='DEPORTE'
            LIMIT $empezar_desde, $tamanno_pagina"; //Esta consulta muestra los registros de 3 en 3 

        $resultado=$base->prepare($sql_limite);
        $resultado->execute(array());

        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

            echo "Nombre: " . $registro["NOMBRE"] . "  Sección: " . $registro["SECCIÓN"] . 
                "  Precio: " . $registro["PRECIO"] . "  País: " . $registro["PAÍS"] . "<br>";
        }

        $resultado->closeCursor();

    
        }catch(Exception $e){

            echo "Línea de error: " . $e->getLine();
            echo "Error: " . $e->getMessage();

        }
    
    /************************Paginación**************************************/

        //El bucle for es para mostrar el nº de página

        for ($i=1; $i<=$total_paginas; $i++){

            echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
        }
    
    
    
    
    
    ?>
    </body>