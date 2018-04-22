<?php
/*
if($_SERVER['REQUEST_METHOD']=='GET'){
    echo 'Se enviaron por GET';
}else{
    echo 'Se enviaron por POST';
}*/

//SEGUNDA FORMA DE VALIDAR
if(isset($_POST['enviar'])){
    echo 'Los datos se enviaron correctamente';
    print_r($_POST['enviar']);
}

?>