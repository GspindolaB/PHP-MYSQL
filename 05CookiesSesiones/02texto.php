<?php
//Si existe una cookie llamada font-size asigna el valor de esa cookie a la variable $tamanio
if(isset($_COOKIE['font-size'])){
    $tamanio = htmlspecialchars($_COOKIE['font-size']);
    //De lo contrario, se asigna a la variable el tamaño por defecto será de 10 px.

}else{
    $tamanio = '10px';
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
        p{
            font-size: <?php echo $tamanio;/*Se imprime el valor de la cooki*/ ?>;
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum pariatur, in inventore earum modi corporis consectetur iste quod beatae, quisquam quis impedit quibusdam ex. Reiciendis dolorem autem amet eos atque?</p>
</body>
</html>