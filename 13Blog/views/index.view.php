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
        <?php foreach($posts as $post): ?>
        <div class="post">
            <article>
                <h2 class="titulo"><a href="single.php?id=<?php echo $post['Id']; ?>"><?php echo $post['Titulo']; ?></a></h2>
                <p class="fecha"><?php echo $post['Fecha']; ?></p>
                <div class="thumb">
                    <a href="single.php?id=<?php echo $post['Id']; ?>"><img src="img/<?php echo $post['Thumb']; ?>" alt=""></a>
                </div>
                <p class="extracto"><?php echo $post['Extracto'] ?></p>
                <a href="single.php?id=<?php echo $post['Id']; ?>" class="continuar">Continuar leyendo.</a>
            </article>
        </div>
        <?php endforeach; ?>
        <!-- Segundo post -->
        
        <!-- Paginacion -->
        <?php require 'paginacion.php'; ?>
    </div>
    <!-- FOOTER -->
    <?php require 'views/footer.php'; ?>
</body>
</html>