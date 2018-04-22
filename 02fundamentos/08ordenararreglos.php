<?php

$meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
//con el siguiente metodo se puede ordenar el arreglo, como es un string los ordena de manera alfabetica
sort($meses);
$numeros = array (1,2,3,4,5,6,7,8,9,10);
//el método rsort los ordena pero al revés 
rsort($numeros);

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
        <li><?php echo $numeros[0].'<br>' ?></li>
        <li><?php echo $numeros[1].'<br>' ?></li>
        <li><?php echo $numeros[2].'<br>' ?></li>
        <li><?php echo $numeros[3].'<br>' ?></li>
        <li><?php echo $numeros[4].'<br>' ?></li>
        <li><?php echo $numeros[5].'<br>' ?></li>
        <li><?php echo $numeros[6].'<br>' ?></li>
        <li><?php echo $numeros[7].'<br>' ?></li>
        <li><?php echo $numeros[8].'<br>' ?></li>
        <li><?php echo $numeros[9].'<br>' ?></li>
    </ul>
    <ul>
        <?php

        foreach($meses as $mes){
            echo '<li>'.$mes.'</li>';
        }
        ?>
    </ul>
</body>
</html>