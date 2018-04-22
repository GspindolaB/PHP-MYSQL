<?php

if($_POST){
    echo $_POST['nombre'];
    echo $contraseña = $_POST['password'];
    echo $sexo = $_POST['sexo'];
    echo $pais = $_POST['opciones'];
    echo $terminos = $_POST['terminos']; 
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
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label for="nombre">Nombre:</label><input type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre:"><br><br>
        <label for="password">Contraseña:</label><input type="password" name="password" id="password" placeholder="Contraseña:"><br><br>
        <label for="hombre">Hombre</label><input type="radio" name="sexo" id="hombre" value="Hombre">
        <label for="mujer">Mujer</label><input type="radio" name="sexo" id="mujer" value="Mujer"><br><br>
        <select name="opciones" id="">
            <option value="México">México</option>
            <option value="Canada">Canada</option>
            <option value="Estados Unidos">Estados Unidos</option>
        </select><br><br>
        <label for="terminos">Acepto los términos y condiciones</label><input type="checkbox" name="terminos" id="terminos" value="ok"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>