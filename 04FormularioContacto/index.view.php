<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulario de Contacto</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-md-6 columna bg-white">
                <div class="cuerpo">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="row">
                    <div class="col-12 nombre">
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre:">
                    </div>
                    <div class="col-12 correo">
                        <input type="email" name="correo" id="correo" placeholder="Correo:">
                    </div>
                    <div class="col-12 mensaje">
                        <textarea name="mensaje" id="mensaje" placeholder="Escribenos un mensaje"></textarea>
                    </div>
                    <!--
                    <div class="col-12">
                        <div class="errores">
                        <p>Por favor ingresa tu nombre.</p>
                        <p>Por favor ingresa un correo.</p>
                        <p>Es necesario escribir un mensaje</p>
                        </div>
                    </div>
                    -->
                    <div class="col-12 boton d-flex justify-content-end">
                        <button>Enviar correo</button>
                    </div>
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>