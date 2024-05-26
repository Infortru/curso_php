<?php

setcookie("idioma_seleccionado", $_GET["idioma"] , time()+90000);

header("Location:selecciona_idioma.php");