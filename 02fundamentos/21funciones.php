<?php
#FUNCIONES PREDEFINIDAS
/**
 *  count()  nos permite contar los elementos de un arreglo
 *  sort() nos permite ordenar un arreglo de manera ascendente
 *  rsort() nos permite ordenar un arreglo de manera descendente
 *  var_dump() nos permite mostrar el valor y tipo de dato de una variable
 *  print_r() nos permite mostrar el valor de una variable
 */

 //función simple
function saludo(){
    echo "Hola, es mi primera función del curso <br>";
}

saludo();

//funciones con parámetros
function saludo2($nombre){
    echo 'Hola '.$nombre.'<br>';
}

saludo2('Guillermo');

function sumar($n1, $n2){
    $res=$n1+$n2;
    echo 'La suma de los números es :'.$res.'<br>';
}

function restar($n1, $n2){
    $res=$n1-$n2;
    echo 'La resta de los números es :'.$res.'<br>';
}

function multiplicar($n1, $n2){
    $res=$n1*$n2;
    echo 'La multiplicación de los números es :'.$res.'<br>';
}

function dividir($n1, $n2){
    $res=$n1/$n2;
    echo 'La división de los números es :'.$res.'<br>';
}

sumar(10,5);
restar(10,5);
multiplicar(10,5);
dividir(10,5);

//funciones con return
function modulo($n1,$n2){
    $modulo = $n1 % $n2;
    return $modulo;
}

echo modulo(10,8);

?>