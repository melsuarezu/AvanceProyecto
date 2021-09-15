<?php
    //ruteador -> este se va encargar de los controllores y de la acciones que pedimos
    //aqui el controlador y la accion es la que se obtiene por la URL
    // echo $controlador;
    // echo $accion;
    include_once("controladores/controlador_".$controlador.".php");
    $objControlador="Controlador".ucfirst($controlador);  //se obtiene el nombre de la clase que se va instanciar
    $controlador=new $objControlador();
    $controlador->$accion();
?>