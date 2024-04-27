<?php
    //Date nos sirve para obtener la fecha del sistema

    date_default_timezone_set("Europe/Madrid");       //Establece la zona horaria (ver documentación PHP)
    //date_default_timezone_get();                    //Utiliza la configuración del sistema
    echo date("d/m/Y");                               //El formato de fecha se puede ver en www.php.manual/es/date.php
    echo date("H:i:s");

    //Función para obtener la fecha en español

    function fecha_espanol() {

        $dia = date("d");
        $ano = date("Y");

        $dia_semana = ["domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado"];
        $mes_letra = [" ", "enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre",
                        "octubre", "noviembre", "diciembre"];
        
        $fecha_completa = "Hoy es ".$dia_semana[date("w")]." ".$dia." de ".$mes_letra[date("n")]." de ".$ano;
        echo $fecha_completa;
    }
    fecha_espanol();
    