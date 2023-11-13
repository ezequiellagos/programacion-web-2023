<?php

/*
$_REQUEST
Recoger los datos despues de enviar un formulario. Puede recoger datos $_GET $_POST $_COOKIE

Es util cuando no sabemos o no estamos seguros de que metodo se utilizó
*/

echo $_REQUEST['nombre'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="#" method="post">
        <label for="nombre">nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <br>
        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>