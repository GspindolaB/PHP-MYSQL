<?php

$edad = 18;
//estructura del condicional if que nos sirve para ejecutar un bloque de código solo si la conidición se cumple
if($edad >= 18){
    echo '<h1>'.'Eres mayor de edad'.'</h1>';
    //esta condición se ejecutara si la primera no se cumple
}else{
    echo '<h1>'.'Eres menor de edad'.'</h1>';
}

//estructura del condicional if que nos sirve para ejecutar un bloque de código solo si la conidición se cumple
if($edad >= 65){
    echo '<h1>'.'Eres una persona de la tercera edad'.'</h1>';
    //esta condición se ejecutara si la primera no se cumple
}else if($edad >= 18){
    echo '<h1>'.'Eres mayor de edad'.'</h1>';
    //esta condición se ejecutara si las anteriores no se cumplieron
}else{
    echo '<h1>'.'Eres menor de edad'.'</h1>';
}

?>