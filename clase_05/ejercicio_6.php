<?php

/*

Adivina el número:

- Genera un número aleatorio entre 1 y 100 y guárdalo en una variable de sesión.
- Crea un formulario que permita al usuario adivinar el número.
- Si el número es correcto, muestra un mensaje de felicitaciones. Si es incorrecto, indica si el número adivinado es mayor o menor que el número secreto.

*/

echo "<pre>";
print_r( $_POST);
echo "</pre>";

$numero_aleatorio = rand(1,10);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["numero"])) {
        echo $_POST["numero"];
        if ($_POST["numero"] == $numero_aleatorio){
            echo "<p style='color:green;'>Acertó el numero</p>";
        }else{
            echo "<p style='color:red;'>No Acertó el numero</p>";
        }
    }else{
        echo "No se encontro variable numero";
    }
}

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
        <label for="numero">Ingrese un numero: </label>
        <input type="number" id="numero" name="numero">
        <br>

        <input type="submit" value="Enviar">
    </form>    
</body>
</html>