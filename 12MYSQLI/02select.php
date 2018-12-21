<?php

//Crear una nueva conexión haciendo una instancia de mysqli
$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if($conexion->connect_errno){
    die('Ocurrio un error en la conexión');//Si existe un error, mata la ejecución de la página.
}else{
    //$id = isset($_GET['id']) ? $_GET['id'] : 1;
    $query = 'SELECT * FROM usuarios';
    //Se llama al metodo query y se le pasa como parametro la consulta SQL.
    $resultado = $conexion->query($query);
    //Obtener el número de filas que devolvio la consulta
    if($resultado->num_rows){//Valida que si haya resultados
        while($filas = $resultado->fetch_assoc()){//Mientras existan resultados
            echo $filas['ID'] . ' - ' . $filas['Nombre'] . ' - ' . $filas['Edad'] . ' <br />';
        }      
    }else{
        echo 'No se encontro la búsqueda';
    }
}

