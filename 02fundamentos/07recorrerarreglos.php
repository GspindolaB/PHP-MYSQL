<?php

$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <li><?php echo $meses[0].'<br>' ?></li>
        <li><?php echo $meses[1].'<br>' ?></li>
        <li><?php echo $meses[2].'<br>' ?></li>
        <li><?php echo $meses[3].'<br>' ?></li>
        <li><?php echo $meses[4].'<br>' ?></li>
        <li><?php echo $meses[5].'<br>' ?></li>
        <li><?php echo $meses[6].'<br>' ?></li>
        <li><?php echo $meses[7].'<br>' ?></li>
        <li><?php echo $meses[8].'<br>' ?></li>
        <li><?php echo $meses[9].'<br>' ?></li>
        <li><?php echo $meses[10].'<br>' ?></li>
        <li><?php echo $meses[11].'<br>' ?></li>
    </ul>
    <ul>
        <?php
        //por cada ejecución se llamara mes
        foreach($meses as $mes){
            echo '<li>'.$mes.'</li>';
        }
        ?>
    </ul>
</body>
</html>