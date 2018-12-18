<?php
//Esta funcion obligatoriamente devolvera un entero, de lo contrario enviara un error
function obtenerEdad() : int{
    $edad = '24';
    return $edad;
}

echo obtenerEdad();