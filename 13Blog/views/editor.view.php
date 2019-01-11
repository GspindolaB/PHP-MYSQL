<?php require '../views/header.php'; ?>
    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Editar Articulo</h2>
                <form enctype="multipart/form-data" class="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <input type="hidden" name="id" value="<?php echo $post['Id']; ?>">
                    <input type="text" name="titulo" id="" value="<?php echo $post['Titulo']; ?>">
                    <input type="text" name="extracto" id="" value="<?php echo $post['Extracto']; ?>">
                    <textarea name="texto" id=""><?php echo $post['Texto']; ?></textarea>
                    <input type="file" name="thumb" id="">
                    <input type="hidden" name="thumb_guardada" value="<?php echo $post['Thumb']; ?>"">
                    <input type="submit" value="Modificar Articulo">
                </form>
            </article>
        </div>
    </div>
<?php require '../views/footer.php'; ?>