<?php

    require "conexion.php";

    class devuelveProductos extends Conexion {

        public function devuelve_productos() {
            parent::__construct();
        }
        public function get_productos() {
            $resultado=$this->conexion_db->query("SELECT * FROM articulos");
            $productos=$resultado->fetch_all(MYSQLI_ASSOC);
            return $productos;
        }
    }