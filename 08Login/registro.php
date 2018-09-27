<?php

session_start();
//Si ya existe una sesión iniciada redirige al index, de lo contrario a la página de registro
if(isset($_SESSION['usuario'])){
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = FILTER_VAR(strtoupper($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    //echo "$usuario . $password . $password2";
    $errores = '';

    if(empty($usuario) OR empty($password) OR empty($password2)){
        $errores .= '<li>Por favor ingresa todos los valores</li>';
    }else{
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=curso_php_mysql', 'root', '');
        }catch(PDOException $e){
            echo "Error: " .$e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE Usuario = :usuario LIMIT 1');
        $statement->execute(array(':usuario' => $usuario));
        $resultset = $statement->fetch();

        if($resultset != false){
            $errores .= '<li>El usuario ya existe, por favor intenta con otro</li>';
        }
        //Cifrar la contraseña
        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);
        
        if($password != $password2){
            $errores .= '<li>Las contraseñas no coinciden</li>';
        }

    }

    if ($errores == ''){
        $statement = $conexion->prepare('INSERT INTO usuarios (usuario, pass) VALUES (:usuario, :pass)');
        $statement->execute(array(':usuario' => $usuario, ':pass' => $password));

        header('Location: login.php');
    }

}

require 'views/registro.view.php';

?>