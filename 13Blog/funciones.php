<?php

//Conexion a la BDD
function conexion($bd_config){
    try{
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['base_datos'], $bd_config['usuario'], $bd_config['password']);
        return $conexion;
    }catch(PDOException $e){
        return false;
    }
}

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function pagina_actual(){
    return isset ($_GET['p']) ? (int)$_GET['p'] : 1;
}

function obtenerPost($post_por_pagina, $conexion){
    $inicio = (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
    $statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina");
    $statement->execute();
    return $statement->fetchAll();
}

?>