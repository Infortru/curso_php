<?php

    include_once("objeto_blog.php");     //Incluimos el otro archivo

    class Manejo_objeto{

        private $conexion;

        //Método constructor
        public function __construct($conexion){

            $this->setConexion($conexion);
            
        }

        //Método que establece la conexión
        public function setConexion(PDO $conexion){

            $this->conexion=$conexion;

        }

        //Método para obtener las entradas del blog

        public function getContenidoPorFecha(){

            $matriz=array();        //Los resultados de la consulta se guardan en un array
            $contador=0;            //Para recorrer los registros de la base de datos
            $resultado=$this->conexion->query("SELECT * FROM contenido ORDER BY 'Fecha'");  //Obtenemos los registros de la bbdd

            while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){   //Recorremos los registros devueltos por la consulta 
                                                                    //anterior y reamos una instancia del Objeto_blog
                $blog=new Objeto_blog();                            //con cada vuelta del bucle

                $blog->setId($registro["Id"]);                      //Establecemos los valores de las propiedades
                $blog->setFecha($registro["Fecha"]);
                $blog->setTitulo($registro["Titulo"]);
                $blog->setComentario($registro["Comentario"]);
                $blog->setImagen($registro["Imagen"]);

                $matriz[$contador]=$blog;                           //En cada posición del array se guarda una instancia
                                                                    //de Objeto_blog
                $contador++;
            }

            return $matriz;
        }

        public function insertarContenido(Objeto_blog $blog){       //Inserta datos en la bbdd

            $titulo=$blog->getTitulo();
            $fecha=$blog->getFecha();
            $comentario=$blog->getComentario();
            $imagen=$blog->getImagen();
            $sql="INSERT INTO contenido (Titulo, Fecha, Comentario, Imagen) VALUES ('" . $titulo . "', '" . $fecha . "',
                '" . $comentario . "', '" . $imagen . "')";

            $this->conexion->exec($sql);
        }
    }