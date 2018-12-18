<?php

//$nombre = isset($_GET['nombre'])? $_GET['nombre'] : 'Anonimo';
//En lugar de hacer el anterior if, realizamos lo siguiente

$nombre = $_GET['nombre'] ?? 'Anonimo';

echo $nombre;