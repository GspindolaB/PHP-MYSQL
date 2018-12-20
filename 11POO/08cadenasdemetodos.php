<?php

class Usuario{
    public $nombre;
    public $correo;

    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarNombre(){
        echo 'El nombre es: ' . $this->nombre. '<br />';
        return $this;//Al hacer esto podemos encadenar metodos dentro de la misma línea.
    }

    public function mostrarCorreo(){
        echo 'El Correo es: ' . $this->correo. '<br />';
        return $this;//Al hacer esto podemos encadenar metodos dentro de la misma línea.
    }
}

$guillermo = new Usuario('Guillermo','gspindolab@gmail.com');
/*$guillermo->mostrarNombre();
$guillermo->mostrarCorreo();*/
$guillermo->mostrarNombre()->mostrarCorreo();