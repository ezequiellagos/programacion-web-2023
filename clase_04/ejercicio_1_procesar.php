<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $Shrek = $_GET["Shrek"];
    $star_wars = $_GET["Star_Wars"];
    $iron_man = $_GET["Iron_Man"];

    var_dump($Shrek);

    $peliculas = [
        "shrek" => $Shrek,
        "star_wars" => $star_wars,
        "iron_man" => $iron_man,
    ];

    
    foreach($peliculas AS $pelicula){
        if($pelicula >= 4)
            echo $pelicula;
    }

}