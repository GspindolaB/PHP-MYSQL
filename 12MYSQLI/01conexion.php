<?php

//Crear una nueva conexión haciendo una instancia de mysqli
$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if($conexion->connect_errno){
    die('Ocurrio un error en la conexión');//Si existe un error, mata la ejecución de la página.
}else{
    //Codigo a ejecutar
}

