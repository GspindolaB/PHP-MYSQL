<?php
/** 
 * Clases Abstractas: Nos permiten proteger la clase para que no se pueda acceder a ella.
 * A menos de que esta sea heredada por otra clase.
*/
abstract class Persona{
    public function saludar(){
        return 'Hola';
    }
}

class Estudiante extends Persona{

}

$persona = new Estudiante;
echo $persona ->saludar();