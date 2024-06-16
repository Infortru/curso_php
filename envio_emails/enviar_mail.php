<?php

    $email=$_POST["email"];
    $asunto=$_POST["asunto"];
    $texto_email=$_POST["comentarios"];
    $headers="MIME-Version: 1.0 \r\n";                          // \r->retorno de carro \n->nueva línea
    $headers.="Content-type: text/html; charset=utf-8 \r\n";    // Con .= concatenamos con lo anterior
    $headers.="From: pruebas email <rtrujillo71.rt@gmail.com>\r\n";

    if($email=="" || $asunto=="" || $texto_email==""){
        echo "Rellena los campos obligatorios";
    }else{

        $envio=mail($email, $asunto, $texto_email, $headers);

        if($envio){
            echo "Mensaje enviado";
        }else{
            echo "Error al enviar";
        };
    }       