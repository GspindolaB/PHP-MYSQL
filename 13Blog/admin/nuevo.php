<?php session_start();

require 'config.php';
require '../funciones.php';

comprobarSesion();

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: error.php');
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $titulo = limpiarDatos($_POST['titulo']);
    $extracto = limpiarDatos($_POST['extracto']);
    $texto = limpiarDatos($_POST['texto']);
    $thumb = $_FILES['thumb']['tmp_name'];
    $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
    move_uploaded_file($thumb, $archivo_subido);

    $statement=$conexion->prepare('INSERT INTO articulos (Id, Titulo, Extracto, Texto, Thumb) VALUES
    (null, :Titulo, :Extracto, :Texto, :Thumb)');
    $statement->execute(array(
        ':Titulo'=>$titulo,
        ':Extracto'=>$extracto,
        ':Texto'=>$texto,
        ':Thumb'=>$_FILES['thumb']['name']
    ));
    header('Location: ' . RUTA . 'admin');
}

require '../views/nuevo.view.php'

?>