<?php
//Comprobar si el archivo existe
$resultado=file_exists('documento.txt');
var_dump($resultado);
/*Validación de fiferente manera
if(file_exists('documento.txt')){
    echo 'El archivo existe';
}else{
    echo 'Archivo inexistente';
}*/
//Esta función nos permite mostrar el contenido del archivo en pantalla
$contenido=file_get_contents('documento.txt');
echo $contenido;
//Escribir contenido en el archivo
//file_put_contents('documento.txt', 'Hola Josh');
//Agregando la constante de FILE_APPEND se agrega el contenido al final del mismo en vez de sobre escribirlo
file_put_contents('documento.txt', "Hola Guillermo Spindola \n", FILE_APPEND);
//Establecer el contenido del documento en blanco
file_put_contents('documento.txt', '');
//Contador para escribir los números del 1 al 1o
for($i=1; $i<=10; $i++){
    file_put_contents('documento.txt', "$i \n", FILE_APPEND);
}
//La función file nos permite imprimir como array el contenido del archivo
//Cada línea del archivo es el elemento que contiene el array
$archivo = file('documento.txt');
echo "<pre>";
print_r($archivo);

?>