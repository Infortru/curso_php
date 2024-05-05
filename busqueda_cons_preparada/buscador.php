<link rel='stylesheet' type='text/css' media='screen' href='main.css'>

<?php
    require_once("../acceso_BBDD/acceso_BBDD.php");

    $busca = $_GET["buscar"];

    $consulta = "SELECT * FROM articulos WHERE id_artículo = ?";

    $resultado = mysqli_prepare($conexion, $consulta);

    $preparado = mysqli_stmt_bind_param($resultado,"i", $busca);

    $preparado = mysqli_stmt_execute($resultado);

    $preparado = mysqli_stmt_bind_result($resultado, $id, $seccion, $nombre, $fecha, $pais, $precio);

    while (mysqli_stmt_fetch($resultado)) {
        echo $id . " " . $seccion . " " . $nombre . " " . $fecha ." ". $pais ."". $precio;
    }