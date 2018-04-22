<?php

$paises = array('México', 'España', 'Colombia', 'Perú', 'Argentina', 'Venezuela', 'Guatemala');

foreach($paises as $pais){
    echo $pais.'<br>';
    //la ajecucion se corta a partir de España
    if($pais=='España'){
        break;
    }

}

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
    <h1>Paises latinoamericanos</h1>
    <?php

    foreach($paises as $pais){
        //la ajecucion se salta el páis de España
        if($pais=='España'){
            continue;
        }
        echo $pais.'<br>';
    }

    ?>
</body>
</html>