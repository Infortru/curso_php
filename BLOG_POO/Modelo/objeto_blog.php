<?php

    class Objeto_blog{

        //Propiedades

        private $id;
        private $titulo;
        private $fecha;
        private $comentario;
        private $imagen;

        //Métodos de acceso getters y setters

        public function getId(){

            return $this->id;
        }
        public function setId($id){

            $this->id=$id;
        }
        public function getTitulo(){

            return $this->titulo;
        }
        public function setTitulo($titulo){

            $this->titulo=$titulo;
        }
        public function getFecha(){

            return $this->fecha;
        }
        public function setFecha($fecha){

            $this->fecha=$fecha;
        }
        public function getComentario(){

            return $this->comentario;
        }
        public function setComentario($comentario){

            $this->comentario=$comentario;
        }
        public function getImagen(){

            return $this->imagen;
        }
        public function setImagen($imagen){

            $this->imagen=$imagen;
        }
    }