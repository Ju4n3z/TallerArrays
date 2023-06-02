<?php

    $planetas = array(
        "Sol" => 0,
        "Mercurio" => 1,
        "Venus" => 2,
        "Tierra" => 3,
        "Marte" => 4,
        "Jupiter" => 5,
        "Saturno" => 6,
        "Urano" => 7,
        "Neptuno" => 8,
        "Pluton" => 9
    );

    $planetas = array_flip($planetas);

    $valor = $_POST['valor'];

    echo <<<HTML
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <div class="container text-center p-3">
        <h1 style="color: white;">El planeta en la posición $valor es: $planetas[$valor]</h1>
        <a href='index.html'><button class="btn btn-info">Volver</button></a>
    </div>
    
    HTML;

?>