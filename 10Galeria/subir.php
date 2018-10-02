<?php

require 'funciones.php';

$conexion = conexion('galeria', 'root', '');

if(!$conexion){
    die();
    //header(Location: error.php);
}

if($_SERVER['REQUEST_METHOD']=='POST' && !empty($_FILES)){
    //Devuelve el arreglo con las propiedades de la imagen, si no es una imagen devolvera error.
    $check = @getimagesize($_FILES['foto']['tmp_name']);
    //print_r($_FILES);
    //Si no hay errores se ejecuta lo siguiente:
    if($check != false){
        //Ruta donde se guardaran las imagenes
        $carpeta_destino = 'img/';
        //Se concatena la carpeta de destino junto con el nombre del archivo
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
        //Esta función nos permite mover la imagen seleccionada a la ruta especificada
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido);
        //echo $archivo_subido;
        //
        $statement = $conexion->prepare('INSERT INTO fotos (titulo, imagen, texto) VALUES (:titulo, :imagen, :texto)');
        $statement->execute(array(
            ':titulo'=>$_POST['titulo'], 
            ':imagen'=>$_FILES['foto']['name'], 
            ':texto'=>$_POST['descripcion']
        ));

        header('Location: index.php');
    }else{//Si hay errores lo siguiente
        $error = "El archivo no es una imagen o en su defecto este es muy grande, por favor intenta con otro.";
    }
}

require 'views/subir.view.php';

?>