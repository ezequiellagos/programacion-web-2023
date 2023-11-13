<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Formulario opciones</h1>

    <br>

    <form action="procesar.php" method="POST">
        <select name="fruta" id="fruta">
            <option disabled>Seleccione una opción</option>
            <?php
            $frutas = [
                "manzana",
                "naranja",
                "sandia",
            ];

            foreach($frutas AS $fruta ){
                if($fruta == "naranja")
                    echo "<option selected value='$fruta'>$fruta</option>";
                elseif ($fruta == "sandia")
                    echo "<option disabled value='$fruta'>$fruta</option>";
                else
                    echo "<option value='$fruta'>$fruta</option>";
            }
            ?>
            <br>
            <input type="submit" value="Enviar">
        </select>
    </form>
    
</body>
</html>