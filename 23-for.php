<?php
    // El ciclo for se utiliza cuando tenemos determinado el número de veces que tiene que ejucatarse el código

    /*for ($i = 1; $i <= 20; $i++) {
        echo $i ."<br>";
    }
    */
    if (isset($_POST["numero"]) && $_POST["numero"]!="") {
        $numero = $_POST["numero"];
        for ($i = 1; $i <= 10; $i++) {
            echo $i." X ".$numero ." = ". $numero*$i."<br>";
        }
    }else{
        echo "La variable está vacía";
    }