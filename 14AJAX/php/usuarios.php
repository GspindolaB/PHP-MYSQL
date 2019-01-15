<?php

//Indicamos que trabajaremos con un archivo JSON y la codificacion del archivo
header('Content-type: application/json; charset=utf-8');

//echo '[{"nombre": "Guillermo"}, {"nombre": "Yahir"}]';

$respuesta = array(
    array(
        'id'=>'2514160171',
        'nombre'=>'Guillermo',
        'edad'=>24,
        'pais'=>'Mexico',
        'correo'=>'gspindolab@gmail.com'
    ),
    array(
        'id'=>'2514160172',
        'nombre'=>'Yahir',
        'edad'=>27,
        'pais'=>'Brazil',
        'correo'=>'gspindolab@gmail.com'
    )
);

echo json_encode($respuesta);

/*
echo '<pre>';
var_dump($respuesta);
echo '</pre>';*/
