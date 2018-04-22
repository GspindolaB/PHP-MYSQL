<?php

$edad = 18;
//Si ls variable edad esta seteada muestra el valor de la variable, de lo contrario muestra el mensajito.
$edad = (isset($edad)) ? $edad : 'El usuario no establecio la edad' ;

echo 'Edad: '.$edad;

?>