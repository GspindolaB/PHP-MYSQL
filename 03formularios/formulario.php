<?php

$errores = '';

if(isset($_POST['enviar'])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['mail'];

    if(!empty($nombre)){
        /*
        $nombre=trim($nombre);
        $nombre=htmlspecialchars($nombre);
        $nombre=stripcslashes($nombre);
        echo 'Tu nombre es: '.$nombre.'<br>';*/
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        echo 'Tu nombre es: '.$nombre.'<br>';
    }else{
        $errores .= 'Por favor escribe un nombre <br>';
    }

    if(!empty($correo)){
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
            $errores .= 'Ingresa un correo valido';
        }

        echo 'Tu correo es: '.$correo.'<br>';
    }else{
        $errores .= 'Por favor agrega un correo';
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <label for="nombre">Nombre:</label><input type="text" name="nombre" id="nombre"><br><br>
        <label for="mail">Correo:</label><input type="text" name="mail" id="mail"><br><br>
        <?php if(!empty($errores)): ?>
            <div class="error"><?php echo $errores ?></div>
        <?php endif; ?>
        <input type="submit" value="Enviar" name="enviar"><br> 
    </form>
</body>
</html>