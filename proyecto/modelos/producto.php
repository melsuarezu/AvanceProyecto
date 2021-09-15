<?php
    class Producto{
        public $imgProducto;
        public $marca;
        public $modelo;
        public $precio;

        public function __construct($imgProducto, $marca, $modelo, $precio) {
            $this->imgProducto=$imgProducto;
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->precio=$precio;
        }

        public static function consultar(){
            $listaProductos=[];
            $conexionBD=BD::crearInstancia();

            $sql=$conexionBD->query("SELECT * FROM produc");


            foreach($sql->fetchAll() as $producto){
                $listaProductos[] = new Producto($producto['imgProducto'],$producto['marca'],$producto['modelo'], $producto['precio']);
            }

            return $listaProductos;
        }
    }
?>