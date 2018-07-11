<?php

$id = $_GET['id'];

require_once 'pdo.php';

try{
    //Se prepara la consulta
    $statement = $conexion->prepare('SELECT * FROM members WHERE id = :id OR name LIKE "%Guillermo%"');
    //Se ejecuta la consulta
    $statement -> execute(
        array(':id' => $id)
    );
    //El metodo fetch devuelve un solo valor , mientras que fetchAll() devuelve todos
    $resultado = $statement->fetch();
    print_r($resultado);
    //fetchAll
     $statement2 = $conexion->prepare('SELECT * FROM members WHERE id = :id OR name LIKE "%Guillermo%"');
     $statement2 -> execute(
         array(':id' => $id)
     );
     $resultado2 = $statement2->fetchAll();
     foreach($resultado2 as $res){
         echo $res['email']. '<br />';
     }
     /*INSERT
     $insertar = $conexion ('INSERT INTO badge VALUES (null, "OMG")');
     $statement3 -> execute();*/
}catch(PDOException $e){
    echo 'Error:' .$e->getMessage();
}

?>