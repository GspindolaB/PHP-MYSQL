<?php

$arreglo = array('nombre'=>'Guillermo', 'apellido'=>'Spindola');

extract($arreglo);//Nos permite acceder a un elemento del array y tratarla como una variable

//echo $arreglo['nombre'];//En lugar de hacer esto hacemos lo siguiente

echo $nombre . ' ' . $apellido;
