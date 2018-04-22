<?php
#FOR
//En primer lugar se declara la variable.
//Después ponemos la condición, mientras sea menor o igual a 100.
//Se indica el incremento de la variable;
#Imprime del 1 al 10
for($i = 1; $i <= 10; $i++){
    echo 'Número: '.$i.'<br>';
}

echo '<br>';
#Imprime del 10 al 1
for($i = 10; $i >= 1; $i--){
    echo 'Número: '.$i.'<br>';
}

echo '<br>';
#Imprime del 10 al 100 , de 10 en 10
for($i = 10; $i <= 100 ; $i = $i + 10){
    echo 'Número: '.$i.'<br>';
}



?>