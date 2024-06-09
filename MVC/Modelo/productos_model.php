<?php

    class Productos_model{
        private $db;
        private $productos;

        public function __construct(){

            require_once("conectar.php");
            $this->db=Conectar::conexion();
            $this->productos=array();
            
        }

        public function get_productos(){

            $consulta=$this->db->query("SELECT * FROM articulos");

            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

                $this->productos[]=$filas;
            };
            return $this->productos;
        
        }
    }

        
    
    