<?php
//Este operador nos sirve para comparar valores
/** Regresa 1 si el valor en la izquierda es mayor quen el de la derecha.
 *  Regresa 0 si los valores de ambos lados son iguales.
 *  Regresa -1 si el valor de la derecha es mayor que el de la izquierda.
 */
echo  8 <=> 5;
echo '<br />';
echo  5 <=> 5;
echo '<br />';
echo  8 <=> 10;
echo '<br />';
echo '<br />';

$arreglo = array(29,27,25,21,28);
sort($arreglo);//Ordenar un arreglo
$division = implode('-', $arreglo);

echo $division;

echo '<br />';
echo '<br />';

//Como ejemplo: La siguiente funcion realiza algo similar a el operador de nave espacial
function comparar($a, $b){
    if($a == $b){
        return 0;
    }elseif($a > $b){
        return 1;
    }else{
        return -1;
    }
}

usort($division, 'comparar');

echo comparar(9,99);