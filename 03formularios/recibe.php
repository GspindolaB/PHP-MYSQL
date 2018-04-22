<?php

//print_r($_POST);
/*

if(!$_POST){
    header('Location: index.php');
}else {

    $nombre = $_POST['nombre'];
    $contraseña = $_POST['password'];
    $sexo = $_POST['sexo'];
    $pais = $_POST['opciones'];
    $terminos = $_POST['terminos']; 

    echo 'Bienvenido '.$nombre.' tu contraseña es: '.$contraseña.' eres un(a) '.$sexo.' de '.$pais.' y los terminos son: '.$terminos.'<br>';
}*/

//print_r($_GET);

if(!$_GET){
    header('Location: index.php');
}else {

$nombre = $_GET['nombre'];
    $contraseña = $_GET['password'];
    $sexo = $_GET['sexo'];
    $pais = $_GET['opciones'];
    $terminos = $_GET['terminos']; 

    echo 'Bienvenido '.htmlspecialchars($nombre).' tu contraseña es: '.$contraseña.' eres un(a) '.$sexo.' de '.$pais.' y los terminos son: '.$terminos.'<br>';
}
?>