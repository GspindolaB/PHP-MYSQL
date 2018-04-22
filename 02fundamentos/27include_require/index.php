<?php

function sumar($n1, $n2){
    $res=$n1+$n2;
    return $res;
}
//$resultado=sumar(10,5);
//echo 'La suma de los números es :'.$resultado.'<br>';


//include 'index.view.php';
#La diferencia entre include y require es que con require no se ejecuta el resto de la página
require 'index.view.php';

##include_once y require_once nos permite ejecutar solamente una vez los archivos

echo 'Hola';

?>