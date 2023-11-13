<?php

/*
1)
Encuesta de películas:
Crea una matriz con nombres de películas. Muestrar estas películas en un formulario y permite al usuario calificar cada una en una escala del 1 al 5. Al enviar, muestra las películas que el usuario calificó con 4 o más.

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $peliculas = [
        "Shrek",
        "Star_Wars",
        "Iron_Man",
    ];

    ?>

    <form action="ejercicio_1_procesar.php" method="get">
        <?php
        foreach($peliculas AS $pelicula){
            echo "
                <p>
                    <h3>$pelicula</h3>
                    <input type='radio' id='$pelicula-1' name='$pelicula' value='1'>
                    <label for='$pelicula-1'>1</label><br>

                    <input type='radio' id='$pelicula-2' name='$pelicula' value='2'>
                    <label for='$pelicula-2'>2</label><br>

                    <input type='radio' id='$pelicula-3' name='$pelicula' value='3'>
                    <label for='$pelicula-3'>3</label><br>

                    <input type='radio' id='$pelicula-4' name='$pelicula' value='4'>
                    <label for='$pelicula-4'>4</label><br>

                    <input type='radio' id='$pelicula-5' name='$pelicula' value='5'>
                    <label for='$pelicula-5'>5</label><br>
                </p>
            ";
        }

        ?>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
