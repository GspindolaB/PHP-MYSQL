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
    <?php require 'views/header.php'; ?>
    <!--Contenido de todos los post -->
    <div class="contenedor">
        <!-- Primer post -->
        <div class="post">
            <article>
                <h2 class="titulo">Titulo del articulo</h2>
                <p class="fecha">09 de Enero del 2016</p>
                <div class="thumb">
                    <a href="#"><img src="img/1.png" alt=""></a>
                </div>
                <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, alias?</p>
                <a href="#" class="continuar">Continuar leyendo.</a>
            </article>
        </div>
        <!-- Segundo post -->
        <div class="post">
            <article>
                <h2 class="titulo">Titulo del articulo</h2>
                <p class="fecha">09 de Enero del 2016</p>
                <div class="thumb">
                    <a href="#"><img src="img/2.png" alt=""></a>
                </div>
                <p class="extracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, alias?</p>
                <a href="#" class="continuar">Continuar leyendo.</a>
            </article>
        </div>
        <!-- Paginacion -->
        <?php require 'paginacion.php'; ?>
    </div>
    <!-- FOOTER -->
    <?php require 'views/footer.php'; ?>
</body>
</html>