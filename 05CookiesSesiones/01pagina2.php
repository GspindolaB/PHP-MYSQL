<?php
session_start();
if($_SESSION){
    //Si existe la sesión asignala a una variable e imprime su valor en un h1
    $nombre = $_SESSION['nombre'];
    echo "<h1>Hola, $nombre</h1>";
}else{
    //Si no existe la sesion manda el siguiente mensaje
    echo "No has iniciado sesion";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página 2</title>
</head>
<body>
    <a href="cerrar.php">Cerrar Sesión</a>
</body>
</html>