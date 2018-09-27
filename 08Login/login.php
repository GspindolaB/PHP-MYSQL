<?php

session_start();

if(isset($_SESSION['usuario'])){
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = FILTER_VAR(strtoupper($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $errores = '';

    try{
        $conexion = new PDO('mysql:host=localhost;dbname=curso_php_mysql', 'root', '');
    }catch(PDOEception $e){
        echo "Error: ". $e->getMessage();
    }

    $statement=$conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :pass');
    $statement->execute(array(':usuario'=>$usuario, ':pass'=>$password));

    $resultset = $statement->fetch();
    
    if($resultset != false){
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
    }else{
        $errores .= '<li>Los datos ingresados son incorrectos, favor de validar</li>';
    }
}

require 'views/login.view.php';

?>