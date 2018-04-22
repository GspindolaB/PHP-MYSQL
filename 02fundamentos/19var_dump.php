<?php

//la función var_dump nos permite conocer el valor y el tipo de dato de la variable que estamos utilizando

$texto = 'Guillermo';
$numero = 23;
$decimal = 1.97;
$arreglo = array('Guillermo','Ricardo','Spindola','Brisuela');
$asociativo = array('Nombre'=>'Guillermo','Apellido'=>'Spindola','Edad'=>23,'Estatura'=>1.97);
$booleano = false;

var_dump($texto);
echo '<br>';
var_dump($numero);
echo '<br>';
var_dump($decimal);
echo '<br>';
var_dump($arreglo);
echo '<br>';
var_dump($asociativo);
echo '<br>';
var_dump($booleano);

?>