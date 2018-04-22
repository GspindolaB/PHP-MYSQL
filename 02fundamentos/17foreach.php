<?php

$meses =  array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Otubre','Noviembre','Diciembre');

$minombre = array('Nombre'=>'Guillermo','Apellido'=>'Spindola','Edad'=>23,'Estatura'=>1.97)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Meses</h1>
    <ul>
        <?php foreach($meses as $mes){
            echo '<li>'.$mes.'</li>';
        } 
        ?>
    </ul>    
        <h1>Array asociativo</h1>  
        <ul>
        <?php  
            foreach($minombre as $mi => $valores){
                echo '<li>'.$mi.': '.$valores.'</li>';
            }
        ?>
        </ul>
       
    
</body>
</html>