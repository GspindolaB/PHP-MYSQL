<?php

$errores = '';
$enviado = '';
//Si el usuario hizo clic en el botón submit hace todo lo siguiente
if(isset($_POST['submit'])){
    //Se declaran las variable con los valores ingresados en el formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    //Si el nombre del usuario no esta vacio, le quita todos los espacios y sanea la cadena ingresada
    if(!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    //Si la caja de texto esta vacia se imprimira el siguiente error en pantalla
    }else{
        $errores.='Por favor ingresa un nombre <br />';
    }
    //Si se ingreso una cadena se sanitiza y se agrega otro condicional
    if(!empty($correo)){
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        //Si el correo agregado no es valido se muestra un error en pantalla
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores .= 'Por favor ingresa un correo valido <br />';
        }
    //Si no se ingreso ningún texto, se mostrara este error.
    }else{
        $errores .= 'Por favor ingresa un correo electronico <br />';
    }
    //Si el mensaje a sido ingresado, realiza una serie de limpiezas a la cadena
    if(!empty($mensaje)){
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    //Si no fue enviado alerta de que no a sido escrito nada
    }else{
        $errores .= 'Es necesario escribir el mensaje';
    }
    //Si no existen errores prepara el mensaje para enviarlo
    if(!$errores){
        $enviar_a = 'gspindolab@gmail.com';
        $asunto = 'Esta es una página de prueba';
        $mensaje_listo = 'De: '.$nombre.' . \n';
        $mensaje_listo .= 'Correo '.$correo.' . \n';
        $mensaje_listo .= 'Mensake '.$mensaje.' .';
        //Envia el mensaje con la función mail.
        mail($enviar_a, $asunto, $mensaje_listo);
        $enviado = true;
    }
}

require 'index.view.php';

?>