<?php

error_reporting(0);//Si ocurre algún error, no se moestrara como respuesta
//Indicamos que trabajaremos con un archivo JSON y la codificacion del archivo
header('Content-type: application/json; charset=utf-8');

$conexion = new mysqli('localhost', 'root', '', 'curso_ajax');

if($conexion->connect_errno){
    $respuesta = array(
        'error'=>true
    );
    //die();
}else{
    $conexion->set_charset("utf8");//Trabajar con UTF-8
    $statement =  $conexion->prepare("SELECT * FROM usuarios");
    $statement->execute();
    $resultados = $statement->get_result();

    $respuesta = array();

    while($fila = $resultados->fetch_assoc()){
        $usuario = array(
            'id' => $fila['Id'],
            'nombre' => $fila['Nombre'],
            'edad' => $fila['Edad'],
            'pais' => $fila['Pais'],
            'correo' => $fila['Correo']
        );
        array_push($respuesta, $usuario);
    }

}

echo json_encode($respuesta);