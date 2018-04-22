<?php

$texto = 'Guillermo';
$numero = 23;
$decimal = 1.97;
$arreglo = array('Guillermo','Ricardo','Spindola','Brisuela');
$asociativo = array('Nombre'=>'Guillermo','Apellido'=>'Spindola','Edad'=>23,'Estatura'=>1.97);
$booleano = true;
//a diferencia de var_dump, print_r nos permite conocer solamente el valor de la variable y no el tipo de dato. Ademàs de que si el valor de boolean
//es false no se muestra nada y si es true se muestra un 1.
print_r($texto);
print_r($numero);
print_r($decimal);
print_r($arreglo);
print_r($asociativo);
print_r($booleano);

?>