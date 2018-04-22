<?php

$meses =  array ('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Otubre','Noviembre','Diciembre');

echo '<h1>Recorre arreglos con for</h1><br>';
for($i=0;$i<count($meses);$i++){
    echo $meses[$i].'<br>';
}

echo '<br>';

$whi = 0;
echo '<h1>Recorre arreglos con while</h1><br>';
while($whi<count($meses)){
    echo $meses[$whi].'<br>';
    $whi++;
}

?>