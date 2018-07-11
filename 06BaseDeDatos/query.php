<?php
//Se incluye el archivo de la conexión
require_once 'pdo.php';

$id = $_GET['id'];

try{
    //Se ejecuta la consulta
    $resultados = $conexion->query('SELECT * FROM badges WHERE id = '.$id);
    //Los resultados se recorren a traves de un foreach
    foreach($resultados as $resultado){
        //Las columnas serán mostradas con un eco
        echo $resultado['name'].'-'.$resultado['description'].'<br />';
    }
    //INSERT a la base de datos
    $insertar = $conexion->query('INSERT INTO tabla VALUES (null, "Guillermo")');
}catch(PDOException $e){
    echo 'Error '.$e->getMessage().'';
}