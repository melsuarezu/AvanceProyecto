<?php

    class Usuario{

        public $id;
        public $nombre;
        public $correo;
        public $contraseña;

        //se hace para la consulta
        public function __construct($id, $nombre, $correo, $contraseña){
            $this->id=$id;
            $this->nombre=$nombre;
            $this->correo=$correo;
            $this->contraseña=$contraseña;
        }

        public static function consultar(){
            $listaUsuarios=[];
            $conexionBD=BD::crearInstancia();

            $sql=$conexionBD->query("SELECT * FROM usuarios");


            foreach($sql->fetchAll() as $usuario){
                $listaUsuarios[] = new Usuario($usuario['id'],$usuario['nombre'],$usuario['correo'],$usuario['contraseña']);
            }

            return $listaUsuarios;
        }


        public static function crear($nombre, $correo, $contraseña){
            $conexionBD= BD::crearInstancia();

            $sql=$conexionBD->prepare("INSERT INTO usuarios(nombre, correo, contraseña) VALUES(?,?,?)");
            $sql->execute(array($nombre,$correo,$contraseña));
        }

        public static function borrar($id){
            $conexionBD= BD::crearInstancia();

            $sql=$conexionBD->prepare("DELETE FROM usuarios WHERE id=?");
            $sql->execute(array($id));
        }

        public static function buscar($id){
            $conexionBD= BD::crearInstancia();

            $sql=$conexionBD->prepare("SELECT * FROM usuarios WHERE id=?");
            $sql->execute(array($id));
            $usuario=$sql->fetch();
            return new Usuario($usuario['id'],$usuario['nombre'],$usuario['correo'],$usuario['contraseña']);
        }

        public static function editar($id, $nombre, $correo, $contraseña){
            $conexionBD= BD::crearInstancia();
            $sql=$conexionBD->prepare("UPDATE usuarios SET nombre=?, correo=?, contraseña=? WHERE id=? ");
            $sql->execute(array($nombre,$correo,$contraseña, $id));
        }
    }
