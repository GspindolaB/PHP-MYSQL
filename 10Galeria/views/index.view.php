<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Album de fotografias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="bg-dark collapse" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-8 py-4">
                        <h4 class="text-white">Acerca de</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam soluta sapiente consectetur veniam. Delectus, quae voluptates? Incidunt quisquam officiis architecto tempore, corporis, ratione eum, quia sapiente vero labore iure mollitia!</p>
                    </div>
                    <div class="col-12 col-sm-4 py-4">
                        <h4 class="text-white">Contacto</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">Siguenos en Twitter</a></li>
                            <li><a href="#" class="text-white">Me gusta en Facebook</a></li>
                            <li><a href="#" class="text-white">Envianos un correo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <i class="fas fa-camera mr-2"></i>
                    <strong>Album</strong>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Alternar Navegacion">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
    <main>
        <section class="jumbotron bg-white text-center mb-0">
            <div class="container">
                <h1 class="display-4">Album de fotografias</h1>
                <p class="lead text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere eveniet recusandae perferendis quo aliquid voluptates nobis repellendus doloribus repudiandae? Quidem provident dolore accusamus tempora in veniam pariatur, nihil velit nisi?</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Ir a la galeria.</a>
                    <a href="subir.php" class="btn btn-secondary my-2">Subir foto.</a>
                </p>
            </div>
        </section>
        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                <?php foreach($fotos as $foto): ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="card-mb-4">
                            <a href="foto.php?id=<?php echo $foto['id']; ?>">
                                <img src="img/<?php echo $foto['imagen'] ?>" class="card-img-top" alt="<?php echo $foto['texto'] ?>">
                            </a>
                            <div class="card-body">
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur facere, aperiam corrupti similique ex perspiciatis.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary">Ver</button>
                                        <button class="btn btn-sm btn-outline-secondary">Editar</button>
                                    </div>
                                    <small class="text-muted">9 minutos</small>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <ul class="pagination pagination-lg d-flex justify-content-start">
                        <?php if($pagina_actual > 1): ?>
                            <li class="page-item"><a class="page-link" href="index.php?p=<?php echo $pagina_actual-1; ?>"><span aria-hidden="true"><- Página Anterior</span></a></li>
                        <?php endif; ?>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="pagination pagination-lg d-flex justify-content-end">
                        <?php if($total_paginas != $pagina_actual): ?>
                            <li class="page-item"><a class="page-link" href="index.php?p=<?php echo $pagina_actual+1; ?>"><span aria-hidden="true">Página Siguiente -></span></a></li>
                            <!--<li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#"><span aria-hidden="true ">>></span></a></li>-->
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-right"><a href="#">Ir arriba</a></p>
            <p class="mb-1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi, earum!</p>
            <p class="mb-1">Lorem<a href="#"> ipsum dolor sit amet</a>, consectetur <a href="#">adipisicing elit.</a></p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>