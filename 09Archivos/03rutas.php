<?php
//Obtener el nombre del archivo con su extension
echo pathinfo('documento.txt', PATHINFO_BASENAME);
//Obtener el directorio
echo pathinfo('jotos/todos/documento.txt', PATHINFO_DIRNAME);
//Obtener la extensión
echo pathinfo('documentos.txt', PATHINFO_EXTENSION);
//Obtiene el nombre del documento sin la extensión
echo pathinfo('documentos.txt', PATHINFO_FILENAME);
//Busca los archivos que tengan la extensión php
$resultado=glob('*.php');
print_r($resultado);
//Busca los archivos que tengan la extensión indicada en los corchetes
$resultado2=glob('*.{php,txt,css,html}', GLOB_BRACE);
print_r($resultado2);
//Muestra solamente el nombre del archivo con la extension
echo basename('carpeta1/carpeta2/archivo.php');
//Podemos quitar la extension añadiendo la extension en el segundo parametro
echo basename('carpeta1/carpeta2/archivo.php', '.php');
//Nos devuelve el directorio padre de la ruta sin el nombre del archivo
echo dirname('carpeta1/carpeta2/archivo.php');
?>