<?php

function contar_usuarios(){
    $archivo = 'contador.txt';
    
    if(file_exists($archivo)){
        //Si el archivo existe recupera su valor y le suma uno.
        $cuenta = file_get_contents($archivo)+1;
        //Establece el valor del archivo con el nuevo valor de la variable cuenta
        file_put_contents($archivo, $cuenta);

        return $cuenta;
    }else{
        //Si no existe el archivo, lo crea y coloca el valor en 1
        file_put_contents($archivo, 1);
        return 1;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contador de Visitas</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
        .visitantes{
            background: red;
            font-size: 40px;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="row mt-3">
        <div class="col-12">
            <h1 class="text-center">Contador de Visitas</h1>
        </div>
    </div>
    <div class="row mt-3 justify-content-center">
        <div class="col-6 col-md-2">
            <div class="visitantes">
            <p class="numero text-center"><?php echo contar_usuarios(); ?></p>
            <p class="texto text-center">Visitas</p>
            </div>
        </div>
    </div>
</body>
</html>