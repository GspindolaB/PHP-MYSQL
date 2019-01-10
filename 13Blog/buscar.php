<?php

require 'admin/config.php';
require 'funciones.php';

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])){
    $busqueda = limpiarDatos($_GET['busqueda']);

    $statement = $conexion->prepare("SELECT * FROM articulos WHERE Titulo LIKE :busqueda OR Texto LIKE :busqueda");
    $statement->execute(array(':busqueda' => "%$busqueda%"));
    $resultados=$statement->fetchAll();

    if(empty($resultados)){
        $titulo = 'No se encontraron articulos con el resultado: ' . $busqueda;
    }else{
        $titulo = 'Resultados de la busqueda: ' . $busqueda;
    }
}else{
    header('Location: index.php');
}

require 'views/buscar.view.php';

?>