<?php  session_start();

require 'config.php';
require '../funciones.php';

comprobarSesion();

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: ../error.php');
}

$id = limpiarDatos($_GET['id']);

if(!$id){
    header('Location :' .RUTA . 'admin');
}

$statement = $conexion->prepare('DELETE FROM articulos WHERE Id = :Id');
$statement->execute(array(':Id' => $id));

header('Location :' .RUTA . 'admin');

?>