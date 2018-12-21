<?php

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if($conexion->connect_errno){
    die('Ocurrio un error en la conexión');//Si existe un error, mata la ejecución de la página.
}else{
    $statement = $conexion->prepare("INSERT INTO usuarios (Nombre, Edad) VALUES (?,?)");//Preparando el query
    /**Una letra por cada elemento que vayamos a insertar
     * s: String
     * i: Integer
     * d: Double
     */
    $statement->bind_param('si', $nombre, $edad);//Pasar los parametros a insertar
    if(isset($_GET['nombre']) && isset($_GET['edad'])){//Si los GET estan seteados, asignalos a las variables.
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
    }
    //$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : 'Anonimo';
    //$edad = isset($_GET['edad']) ? $_GET['edad']: 25;

    $statement->execute();//Ejecuta l instruccion SQL.
    //echo 'Filas afectadad: ' . $conexion->affected_rows;
    if($conexion->affected_rows >= 1){
        echo 'Registro agregado de manera exitoda ' . $conexion->affected_rows;
    }else{
        echo 'No se ha insertado ningún registro';
    }
}