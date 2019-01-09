<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Blog</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="#">Mi primer blog</a></p>
            </div>
            <div class="derecha">
                <form name="busqueda" class="buscar" action="<?php echo RUTA; ?>buscar.php" method="GET">
                    <input type="text" name="busqueda" placeolder="Buscar:">
                    <button type="submit" class="icono fa fa-search"></button>
                </form>
                <nav class="menu">
                    <ul>
                        <li><i><a href="#" class="fab fa-twitter"></i></a></li>
                        <li><i><a href="#" class="fab fa-facebook"></i></a></li>
                        <li><i><a href="#" class="icono fas fa-envelope-square"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>