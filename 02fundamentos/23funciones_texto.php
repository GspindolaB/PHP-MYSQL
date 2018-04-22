<?php

$texto = '<>  & ""';
$hola =' Hola ';
//esta función convierte caracteres especiales en entidades html
echo htmlspecialchars($texto).'<br>';
//esta funcion nos permite eliminar los espacios al inicio y al final
echo trim($hola).'<br>';//tambien existe ltrim y rtrim que nos permite eliminar los caracteres de la izquierda y derecha respectivamente
//esta función nos permite conocer el total de caracteres de una cadena
echo strlen($hola).'<br>';
//esta funcion nos permite mostrar cuantos caracteres de la cadena se van a mostrar y a partir de cual
echo substr($hola,3,2).'<br>';
//esta funcion convierte la cadena de texto a mayusculas
echo strtoupper($hola).'<br>';
//esta funcion convierte la cadena de texto a minusculas
echo strtolower($hola).'<br>';
//nos permite enontrar en que posicion se encuentra un determinado caracter
echo strpos($hola, 'a');



?>