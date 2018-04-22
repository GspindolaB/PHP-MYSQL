<?php

$numero = 41;
/*ESTE BLOQUE MOSTRARA ERROR
function mostrar(){
    echo $numero;
}

mostrar();
*/

function mostrar($numero){
    echo $numero;
}

mostrar($numero);

/*ESTO TAMBIEN MANDARA ERROR
/*ESTE BLOQUE MOSTRARA ERROR
function mostrar(){
    $numero = 10;
}

mostrar();
echo $numero;
*/

?>