<?php

class Persona{
    /**
     * Con static podemos acceder a las propiedades sin necesidad de hacer una instancia de la clase
     */
    public static $dia ='1 de Junio';

    /*public function saludar(){
        return 'Hola,  tu cumpleaños es el dia ' . $this->dia;
    }*/

    public static function saludar($nombre = null){//Se inicializa el nombre en NULL
        if($nombre){//Si hay un nombre ejecuta lo que hay en el if
            return 'Hola,  tu cumpleaños es el dia ' .$nombre;
        }else{
            return 'Hola, buen día';//Si no hay un nombre ejecuta esta línea
        }
    }
}

//$cumpleañoero = new Persona;
//echo $cumpleañoero->saludar('Guillermo');

echo Persona::$dia;
echo Persona::saludar('Josh');
