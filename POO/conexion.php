<?php
    require("config.php");

    class Conexion{
        protected $conexion_db;

        public function __construct(){

            $this->conexion_db=new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
            if ($this->conexion_db->connect_errno) {
                echo "Error al conectar con la base de datos" . $this->conexion_db->connect_error;
                return;
            }
        }
    }


