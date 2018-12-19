<?php

class Persona{
    public $nombre;
    public $edad;
    public $pais;

    //método constructor
    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad. ' años y es originario de ' . $this->pais . '. <br />';
    }
}

$guillermo = new Persona('Guillermo', 24, 'Mexico');
//$guillermo->nombre = 'Guillermo';
//$guillermo->edad = 24;
//$guillermo->pais = 'Mexico';
$guillermo->mostrarInformacion();

$alejandro = new Persona('Alex', 25, 'Brazil');
//$alejandro->nombre = 'Alex';
//$alejandro->edad = 25;
//$alejandro->pais = 'Brazil';
$alejandro->mostrarInformacion();
