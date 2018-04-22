<?php

$nombre = 'Josh';
$apellido = 'Brisuela';
$edad = 23;
$estatura = 1.97;
//estructura del condicional if que nos sirve para ejecutar un bloque de código solo si la conidición se cumple
if($nombre == 'Guillermo' && $apellido == 'Spindola' && $edad == 23 && $estatura == 1.97){
    echo '<h1>'.'Eres una verga, vendrán cosas mejores.'.'</h1>';
}

if($nombre != 'Guillermo' OR $apellido != 'Spindola' OR $edad != 23 OR $estatura != 1.97){
    echo '<h1>'.'JaJaJa, xD.'.'</h1>';
}

?>