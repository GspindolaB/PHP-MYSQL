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
        <!-- Detalles del post post -->
        <div class="post">
            <article>
                <h2 class="titulo"><?php echo $post['Titulo']; ?></h2>
                <p class="fecha"><?php echo fecha($post['Fecha']); ?></p>
                <div class="thumb">
                    <img src="img/<?php echo $post['Thumb']; ?>" alt="">
                </div>
                <p class="extracto"><?php echo nl2br($post['Texto']); ?></p>
            </article>
        </div>
    </div>
    <!-- FOOTER -->
    <?php require 'views/footer.php'; ?>
</body>
</html>