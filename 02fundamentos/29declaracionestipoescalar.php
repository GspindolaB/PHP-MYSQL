<?php
//Es estricto con los tipos de datos
declare(strict_types=1);
function cuadrado(int $numero){
    return $numero * $numero;
}
$numero = '9';

echo 'El cuadrado de ' . $numero . ' es ' .cuadrado($numero);