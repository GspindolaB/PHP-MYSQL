<?php

try{//Codigo a ejecutar
    //El primer parametro es el servidor y el nombre de la BD  autilizar, el tercero el usuario
    //Y el cuarto la contraseña, si no existe se deja vacio
    $conexion = new PDO('mysql:host=localhost;dbname=sm4rtuniversity', 'root', '');
    echo 'Conexion exitosa'.'<br> /';
}catch(PDOException $e){//Mostrar error
    echo 'Error '.$e->getMessage().'';
}

?>