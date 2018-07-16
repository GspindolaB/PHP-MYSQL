<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Paginación</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="text-center titulo">Artículos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="lista">
                    <?php foreach ($articulos as $articulo) : ?>
                        <li><?php echo $articulo['id'] . '.-' . $articulo['articulo']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-3">
                <ul class="pagination pagination-lg paginacion">
                    <!--Se establece cuando el botón de anterior estara deshabilitado-->
                    <?php if($pagina == 1): ?>
                    <li class="page-item disabled"><i class="fas fa-backward"></i></li>
                    <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina - 1 ?>" class="page-link"><i class="fas fa-backward"></i></a></li>
                    <?php endif; ?>
                    <!--Se ejecuta un ciclo para mostrar las páginas-->
                    <?php
                    for($i=1; $i <= $numeroPaginas; $i++){
                        if($pagina == $i){
                            echo "<li class='page-item'><a href='?pagina=$i' class='d-flex justify-content-center page-link'>$i</a></li>";
                        }else{
                            echo "<li class='page-item'><a href='?pagina=$i' class='d-flex justify-content-center page-link'>$i</a></li>";
                        }
                    }
                    ?>
                    <!--Se establece cuando el botón de siguiente estara deshabilitado-->
                    <?php if($pagina == $numeroPaginas): ?>
                    <li class="page-item disabled"><i class="fas fa-forward"></i></li>
                    <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina + 1 ?>" class="page-link"><i class="fas fa-forward"></i></a></li>
                    <?php endif; ?>
                    <!--
                    <li class="page-item"><a href="#" class="d-flex justify-content-center page-link"><i class="fas fa-backward"></i></a></li>
                    <li class="page-item"><a href="#" class="d-flex justify-content-center page-link">1</a></li>
                    <li class="page-item"><a href="#" class="d-flex justify-content-center page-link">2</a></li>
                    <li class="page-item"><a href="#" class="d-flex justify-content-center page-link">3</a></li>
                    <li class="page-item"><a href="#" class="d-flex justify-content-center page-link">4</a></li>
                    <li class="page-item"><a href="#" class="d-flex justify-content-center page-link">5</a></li>
                    <li class="page-item"><a href="#" class="d-flex justify-content-center page-link"><i class="fas fa-forward"></i></a></li>
                    -->
                </ul>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
</body>

</html>