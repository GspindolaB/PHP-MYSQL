<?php

//error_reporting(0);//Si surge un error no lo mostrara en pamtalla

//Indicamos que trabajaremos con un archivo JSON y la codificacion del archivo
header('Content-type: application/json; charset=utf-8');

    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $pais = $_POST['pais'];
    $correo = $_POST['correo'];

    function validarDatos($nombre, $edad, $pais, $correo){
        if($nombre == ''){
            return false;
        }elseif($edad == '' || is_int($edad)){
            return false;
        }elseif($pais == ''){
            return false;
        }elseif($correo == ''){
            return false;
        }else{
            return true;
        }       
    }

    if(validarDatos($nombre, $edad, $pais, $correo)){
        $conexion = new mysqli('localhost', 'root', '', 'curso_ajax');
        $conexion->set_charset('utf8');

        if($conexion->connect_errno){
            $respuesta = array(
                'error' => true
            );
        }else{
            $statement = $conexion->prepare("INSERT INTO usuarios(Nombre, Edad, Pais, Correo)
            VALUES(?,?,?,?)");
            $statement->bind_param("siss", $nombre, $edad, $pais, $correo);
            $statement->execute();

            if($conexion->affected_rows <= 0){
                $respuesta = array(
                    'error' => true
                );
            }else{
                $respuesta = array(
                    'error' => true
                );
            }
        }
    }
    echo json_encode($respuesta);