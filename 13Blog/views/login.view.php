<?php require 'header.php'; ?>

<div class="contenedor">
        <!-- Detalles del post post -->
        <div class="post">
            <article>
                <h2 class="titulo">Iniciar Sesión</h2>
                <form class="formulario" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <input type="text" name="usuario" id="" placeholder="Usuario:">
                    <input type="password" name="password" id="" placeholder="Contraseña:">
                    <input type="submit" value="Iniciar Sesión">
                </form>
            </article>
        </div>
    </div>

<?php require 'footer.php'; ?>