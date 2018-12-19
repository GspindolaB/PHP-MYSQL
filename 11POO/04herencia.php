<?php

class Persona{

    //public $nombre;
    //public $edad;
    //public $pais;

    //método constructor
    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion(){
        return $this->nombre . ' tiene ' . $this->edad. ' años y es originario de ' . $this->pais . '. <br />';
    }
}

class Estudiante extends Persona {

    //método constructor
    function __construct($nombre, $edad, $pais, $carrera){
        parent::__construct($nombre, $edad, $pais);
        $this->carrera = $carrera;
    }
}

class Trabajador extends Persona{
    //método constructor
    function __construct($nombre, $edad, $pais, $trabajo){
        parent::__construct($nombre, $edad, $pais);
        $this->trabajo = $trabajo;
    }
}

$guillermo = new Trabajador('Guillermo Ricardo Spindola Brisuela', 24, 'México', 'Analista 1');
echo $guillermo->trabajo;
//echo $guillermo->mostrarInformacion();

/*class Estudiante{
    public $nombre;
    public $edad;
    public $pais;
    public $carrera;

    //método constructor
    function __construct($nombre, $edad, $pais, $carrera){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
        $this->carrera = $carrera;
    }

    public function mostrarInformacion(){
        return $this->nombre . ' tiene ' . $this->edad. ' años y es originario de ' . $this->pais . '. <br />';
    }
}*/

