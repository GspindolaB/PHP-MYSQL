<?php

$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
//contar los elementos de un arreglo
echo count($meses).'<br>';
//acceder al ultimo mes
$ultimo_mes = count($meses) - 1;
echo $meses[$ultimo_mes];

?>