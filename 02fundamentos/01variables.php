<?php
//String
$nombre = 'Guillermo';
$apellido = 'Spindola';
//Números enteros
$edad = 23;
//Números decimales
$estatura = 1.97;
//Booleano: verdadero o falso
$booleano = true;

echo $nombre.'<br>';
echo $apellido.'<br>';
echo 'Mi nombre es '.$nombre.' y mi apellido '.$apellido.'<br>';
echo "Tengo $edad años y mido $estatura centimetros. ¿Soy la verga? $booleano <br>";

//Array: Arreglo
//Object: Objeto
//Class: Clase
//Null: Cuando a una variable no se le ha asignado ningpun valor;

//esta función nos permite conocer solo el tipo de dato
echo gettype($nombre).'<br>';
//esta función nos permite conocer el tipo de dato y también su valor
var_dump($edad).'<br>';

?>