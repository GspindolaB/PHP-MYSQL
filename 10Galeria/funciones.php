<?php

function conexion($bd, $usuario, $password){
    try{
        $conexion = new PDO("mysql:host=localhost;dbname=$bd", $usuario, $password);
        return $conexion;
    }catch(PDOException $e){
        return false;
    }
}

?>