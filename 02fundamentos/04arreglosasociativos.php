<?php
#ARREGLOS ASOCIATIVOS
//En el arreglo se declara el nombre de la propiedad y su valor
$asociativo = array('Nombre'=>'Guillermo','Apellido'=>'Spindola','Edad'=>23,'Estatura'=>1.97);
//Para acceder a el se indica el nombre de la propiedad en lugar del número de índice
echo 'Mi nombre es '.$asociativo['Nombre'].' me apellido '.$asociativo['Apellido'].' tengo 
'.$asociativo['Edad'].' años y mido '.$asociativo['Estatura'].' cm.'.'<br>';
//Podemos agregar  nuevos elementos o editar los mismos de la siguiente manera
$asociativo['Nombre'] = 'Ricardo';
echo $asociativo['Nombre'];

?>