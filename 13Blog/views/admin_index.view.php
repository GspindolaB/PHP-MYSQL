<?php require '../views/header.php'; ?>
    <!--Contenido de todos los post -->
    <div class="contenedor">
        <h2>Panel de Control</h2>
        <a href="nuevo.php" class="btn">Nuevo Post</a>
        <a href="cerrar.php" class="btn">Cerrar Sesión</a>
        <?php foreach($posts as $post): ?>
        <div class="post">
            <article>
                <h2 class="titulo"><?php echo $post['Id']. ' .- ' . $post['Titulo']; ?></h2>
                <a href="editar.php?id=<?php echo $post['Id']; ?>">Editar</a>
                <a href="../single.php?id=<?php echo $post['Id']; ?>">Ver</a>
                <a href="borrar.php?id=<?php echo $post['Id']; ?>">Borrar</a>
            </article>
        </div>
        <?php endforeach; ?>
        <!-- Segundo post -->
        
        <!-- Paginacion -->
        <?php require '../paginacion.php'; ?>
    </div>
    <!-- FOOTER -->
    <?php require '../views/footer.php'; ?>