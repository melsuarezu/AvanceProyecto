<?php
    include_once("modelos/usuario.php");
    include_once("conexion.php");
    BD::crearInstancia(); //instancia e ingresar al metodo

    class ControladorUsuario{
        public function inicio(){

            $usuarios=Usuario::consultar();

            include_once("vistas/usuario/inicio.php");
        }

        public function crear(){
            if($_POST){
                print_r($_POST);
                $nombre=$_POST['nombre'];
                $correo=$_POST['correo'];
                $contraseña=$_POST['contraseña'];

                Usuario::crear($nombre,$correo,$contraseña);
            }
            include_once("vistas/usuario/crear.php");

        }

        public function editar(){
            

            if($_POST){
                $id=$_POST['id'];
                $nombre=$_POST['nombre'];
                $correo=$_POST['correo'];
                $contraseña=$_POST['contraseña'];

                Usuario::editar($id, $nombre, $correo, $contraseña);
                // print_r($_POST);

                header("Location:./?controlador=usuario&accion=inicio");

            }

            $id=$_GET['id'];
            $usuario=(Usuario::buscar($id));

            include_once("vistas/usuario/editar.php");
        }

        public function borrar(){
            print_r($_GET);
            $id=$_GET['id'];
            Usuario::borrar($id);
            header("Location:./?controlador=usuario&accion=inicio");
        }
    }
?>