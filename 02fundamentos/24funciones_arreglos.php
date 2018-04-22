<?php

$minombre = array('Nombre'=>'Guillermo','Apellido'=>'Spindola','Edad'=>23,'Estatura'=>1.97);
//nos permite extraer los indices de un arreglo asociativo como si fueran variables
extract($minombre);
echo $Apellido.'<br>' ;

$meses =  array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
//nos permite eliminar el ultimo elemento de un arreglo
$ultimoDia=array_pop($meses);

foreach($meses as $mes){
    echo $mes.'<br>';
}
//en esta variable se guardo el valor del ultimo elemento del arreglo
echo $ultimoDia.'<br>';

//separa los elementos del arreglo por el caracter que hayamos indicado en el primer parametro
$separador=join('-', $meses);
echo $separador.'<br>';

//contar los elementos de un arreglo
echo count($meses).'<br>';

//ordenar arreglo de forma ascendente -- rsort los ordena igual manera pero en orden descendente
sort($meses);
echo join('<br>', $meses);
echo '<br>';
//nos permite mostrar el arreglo de manera invertida
$mesesInvertidos = array_reverse($meses);
echo join(',',$mesesInvertidos);

?>