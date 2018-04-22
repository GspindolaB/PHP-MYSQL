<?php

$x = 1;
$x2=10;
$x3=5;
#FOR
//recibe como parametro una variable y una condición
#imprimer los números del 1 al 10
while($x<=10){
    echo $x.'<br>';
    $x++;
}

echo '<br>';
#imprime los números del 10 al 1
while($x2>=1){
    echo $x2.'<br>';
    $x2--;
}

echo '<br>';
#imprime los números de 5 en 5 hasta el 50
while($x3<=50){
    echo $x3.'<br>';
    $x3 = $x3 + 5;
}



?>