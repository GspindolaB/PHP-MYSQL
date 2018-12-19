<?php

class Persona{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad . ' años de edad y es originario de ' . $this->pais . '. <br />';
    }
}

$guillermo = new Persona;
$guillermo->nombre = 'Guillermo';
$guillermo->edad = 24;
$guillermo->pais = 'México';
$guillermo->mostrarInformacion();

$alejandro = new Persona;
$alejandro->nombre = 'Alex';
$alejandro->edad = 25;
$alejandro->pais = 'Brazil';
$alejandro->mostrarInformacion();