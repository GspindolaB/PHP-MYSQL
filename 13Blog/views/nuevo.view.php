<?php require '../views/header.php'; ?>
    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Nuevo Articulo</h2>
                <form enctype="multipart/form-data" class="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <input type="text" name="titulo" id="" placeholder="Titulo del articulo:">
                    <input type="text" name="extracto" id="" placeholder="Extracto del articulo:">
                    <textarea name="texto" id="" placeholder="Texto del articulo:"></textarea>
                    <input type="file" name="thumb" id="">
                    <input type="submit" value="Crear Articulo">
                </form>
            </article>
        </div>
    </div>
<?php require '../views/footer.php'; ?>