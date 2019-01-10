<?php session_start();

require 'config.php';
require '../funciones.php';

$conexion=conexion($bd_config);

//Comprobar sesion
comprobarSesion();

if(!$conexion){
    header('Location: ../error.php');
}

$posts = obtenerPost($blog_config['post_por_pagina'], $conexion);



require '../views/admin_index.view.php';

?>