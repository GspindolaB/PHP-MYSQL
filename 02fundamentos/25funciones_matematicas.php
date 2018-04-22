<?php

$num = 15;
$decimal = 13.2;
//la función round nos permite redondear un decimal
echo round($decimal).'<br>';
//se puede agregar un segundo parametro que indique cuantos decimales va a tomar
$dec2 = 13.8245;
echo round($dec2, 2).'<br>';
//la función rand nos permite establecer un número al azar dentro de un rango de números que establezcamos
echo rand(1, 25000).'<br>';
//la funcion ceil nos permite redondear un número hacia arriba
echo ceil(12.1).'<br>';
//M_PI es una constatnte por defecto de PHP
echo M_PI;
?>