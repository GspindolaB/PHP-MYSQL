<?php
#ARREGLOS
//Se declara un arreglo
$diassemana = array ('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
//Acceder al valor del arreglo, mediante el número del elemento. Este comienza desde cero.
echo 'El primer día de la semana es: '.$diassemana[0].'<br>';
echo 'El segundo día de la semana es: '.$diassemana[1].'<br>';
echo 'El tercer día de la semana es: '.$diassemana[2].'<br>';
echo 'El cuarto día de la semana es: '.$diassemana[3].'<br>';
echo 'El quinto día de la semana es: '.$diassemana[4].'<br>';
echo 'El sexto día de la semana es: '.$diassemana[5].'<br>';
echo 'El septimo día de la semana es: '.$diassemana[6].'<br>';
//Se pueden agregar elementos al array después de declararlo.
$diassemana[7]='Josh';
echo $diassemana[7];
//También se pueden agregar arreglos de la siguiente manera
$arreglo = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];

echo $arreglo;

?>