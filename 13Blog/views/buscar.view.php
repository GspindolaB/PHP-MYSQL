<?php require 'views/header.php'; ?>
    <!--Contenido de todos los post -->
    <div class="contenedor">
    <h2><?php echo $titulo; ?></h2>
        <!-- Primer post -->
        <?php foreach($resultados as $post): ?>
        <div class="post">
            <article>
                <h2 class="titulo"><a href="single.php?id=<?php echo $post['Id']; ?>"><?php echo $post['Titulo']; ?></a></h2>
                <p class="fecha"><?php echo fecha($post['Fecha']); ?></p>
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