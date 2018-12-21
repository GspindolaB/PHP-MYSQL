<?php

$conexion = new mysqli('localhost','root','','prueba_datos');

if($conexion->connect_errno){
    die('Ocurrio un error en la conexión');//Si existe un error, mata la ejecución de la página.
}else{
    $query = "INSERT INTO usuarios (Nombre, Edad) VALUES ('Ismael', '27')";
    $conexion->query($query);
    if($conexion->affected_rows >= 1){
        echo 'Registro agregado de manera exitoda ' .$conexion->affected_rows;
    }
}