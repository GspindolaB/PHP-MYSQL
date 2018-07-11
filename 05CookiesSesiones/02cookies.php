<?php
//Se agrega la cooki, el primer parametro es el nombre, el segundo el valor, el tercero es el tiempo
//de duración y el cuarto el alcance de la cookie, '/' significa disponible para todo el sitio
setcookie('font-size', '50px', time() - 60 * 60 *24 *30, '/');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
    <h1>Cookie Seteada</h1>
</body>
</html>