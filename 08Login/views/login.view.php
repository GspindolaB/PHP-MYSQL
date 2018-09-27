<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio de Sesión</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 titulo mt-5">
                <h1 class="text-center">Inicio de Sesión</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-8 col-lg-6">
                <hr class="bg-white">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" name="login">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text fas fa-user"></span>
                    </div>
                    <input type="text" name="usuario" id="usuario" placeholder="Usuario:" class="form-control">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-append">
                        <span class="input-group-text fas fa-user-lock"></span>
                    </div>
                    <input type="password" name="password" id="password" placeholder="Contraseña:" class="form-control">
                    <div class="input-group-append">
                        <span class="input-group-text bg-success btn btn-success fas fa-arrow-right" onclick="login.submit()"></span>
                    </div>
                </div>
                <?php if(!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
                <?php endif; ?>
                </form>
                <p class="text-center text-white">¿Aún no eres miembro?</p>
                <p class="text-center"><a href="registro.php">Registrate</a></p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>