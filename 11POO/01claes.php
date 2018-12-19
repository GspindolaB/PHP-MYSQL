<?php
/*Ejemplo 1: Programación estructurada o líneal.
$nombre = 'Guillermo';
$edad = 24;
$pais = 'México';

$nombre2 = 'Christisn';
$edad2 = 21;
$pais2 = 'Mozambique';

echo $nombre;*/

class Persona{
    public $nombre;
    public $edad;
    public $pais;

    public function mostrarInformacion(){
        echo 'Hola Mundo';
    }
}

$guillermo = new Persona;
$guillermo->nombre = 'Guillermo Ricardo';
$guillermo->edad = 24;
$guillermo->pais = 'México';

//$guillermo->mostrarInformacion();
echo $guillermo->nombre . ' tiene ' . $guillermo->edad . ' y es originario de ' . $guillermo->pais;

$alejandro = new Persona;
$alejandro->nombre = 'Alex';
$alejandro->edad = 25;
$alejandro->pais = 'España';