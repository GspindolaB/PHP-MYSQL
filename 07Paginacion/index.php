<?php

try{
    $conexion = new PDO('mysql:host=localhost;dbname=paginacion', 'root', '');
}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
    die();
}
//Si la variable página tiene un valor, lo obtenemos, de lo contrario se inicia el valor en 1
$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
//Esta variable se declara para definir los POST que serán mostrados por página
$postPorPagina = 5;
//Si la página es mayor a uno se asigna a la variable de inicio el resultado de la operación, es decir,
//Si estamos en la 2 página, se multiplicara por los post pot página, el resultado será 10
//Y posteriormente le restaremos los post por página,y el resultado será 5.
//De lo contrario, inicia la variable en 0
$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;
//Consulta para traer los articulos
$articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM paginacion LIMIT $inicio, $postPorPagina");
$articulos->execute();
$articulos=$articulos->fetchAll();
if(!$articulos){
    header('Location: index.php');
}
//Se calcula el total de artículos que existen en la BDD
$totalArticulos = $conexion->query("SELECT FOUND_ROWS() AS total");
$totalArticulos = $totalArticulos->fetch()['total'];
//Calculamos el número de páginas y si es que el resultado da un numero decimal, lo redonde hacia arriba  con la funcion ceil
$numeroPaginas = ceil($totalArticulos / $postPorPagina);

require_once 'index.view.php';

?>