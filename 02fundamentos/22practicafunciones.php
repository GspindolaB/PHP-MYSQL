<?php

function areaTrianguloEquilatero($base, $altura){
    $area = ($base * $altura) / 2;
    return  $area;
}

    echo 'El área del triángulo es: ' .areaTrianguloEquilatero(10,5). ' m2';
   // $areaTriangulo = .areaTrianguloEquilatero(10,5)
   //echo 'El área del triángulo es: ' .$areaTriangulo. ' m2';
?>