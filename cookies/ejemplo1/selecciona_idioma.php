<?php

    

    if($_COOKIE["idioma_seleccionado"]=="es"){
        header("Location:español.php");
    }else if($_COOKIE["idioma_seleccionado"]=="in"){
        header("Location:ingles.php");
    }