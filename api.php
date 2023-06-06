<?php

    /**
     *TODO Punto 1
     */

    /*
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
    */

    /**
     *TODO Punto 2
     */
    
    /*
    $planetas = [];

    $valor = $_POST['valor'];

    for ($i=1; $i <= $valor; $i++) { 
        $planetas[$i-1] = "planeta ".$i;
    };

    $planetas = array_flip($planetas);

    for ($i=1; $i <= $valor; $i++) { 
        $planetas["planeta ".$i] = "Deshabitado";
    };

    $planetas_value = array_values($planetas);

    $planetas_key = array_keys($planetas);

    $tabla = '<table class="table table-dark table-striped table-hover"><thead><tr><th scope="col">Planeta</th><th scope="col">Estado</th></tr></thead><tbody>';
    
    for ($i=0; $i < $valor; $i++) { 
        $tabla .= "<tr><td>$planetas_key[$i]</td><td>$planetas_value[$i]</td></tr>";
    };

    echo <<<HTML
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <div class="container text-center p-3">
        <h1 style="color: white;">El estado de los planetas es: $tabla</h1>
        <br>
        <a href='index.html'><button class="btn btn-info m-3">Volver</button></a>
    </div>
    
    HTML;
    */

    /**
     *TODO Punto 3
     */

    /*
    $planetas = array(
        "Mercurio" => "No habitable",
        "Venus" => "No habitable",
        "Tierra" => "Habitable",
        "Marte" => "No habitable",
        "Jupiter" => "No habitable",
        "Saturno" => "No habitable",
        "Urano" => "No habitable",
        "Neptuno" => "No habitable"
    );

    $planetas = array_filter($planetas, function($value){
        return $value == "Habitable";
    });

    $tabla = '<table class="table table-dark table-striped table-hover"><thead><tr><th scope="col">Planeta</th><th scope="col">Estado</th></tr></thead><tbody>';

    foreach ($planetas as $key => $value) {
        $tabla .= "<tr><td>$key</td><td>$value</td></tr>";
    };

    echo <<<HTML

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <div class="container text-center p-3">
        <h1 style="color: white;">Planetas habitables: $tabla</h1>
        <br>
        <a href='index.html'><button class="btn btn-info m-3">Volver</button></a>
    </div>
    
    HTML;
    */

    /**
     *TODO Punto 4
     */

    /*

    $MasayRadio = array(
        "Mercurio" => array(3.30*pow(10,23), 2439700),
        "Venus" => array(4.87*pow(10,24), 6051800),
        "Tierra" => array(5.97*pow(10,24), 6371000),
        "Marte" => array(6.39*pow(10,23), 3389500),
        "Jupiter" => array(1.898*pow(10,27), 69911000),
        "Saturno" => array(5.68*pow(10,26), 58232000),
        "Urano" => array(8.681*pow(10,25), 25362000),
        "Neptuno" => array(1.024*pow(10,26), 24622000)
    );

    $constanteGravedad = 6.67*pow(10,-11);


    $MasayRadio = array_map(function($value) use ($constanteGravedad){
        $value = number_format($constanteGravedad * $value[0] / pow($value[1],2), 4, ".", ".");
        return $value;
    }, $MasayRadio);

    $gravedadTierra = floatval($MasayRadio["Tierra"]);

    $comparacion = $MasayRadio;

    $comparacion = array_map(function($value) use ($gravedadTierra){
        $value = number_format(floatval($value) / $gravedadTierra, 3, ".", ".");
        return $value;
    }, $comparacion);

    $tabla = '<table class="table table-dark table-striped table-hover text-center"><thead><tr><th scope="col">Planeta</th><th scope="col">Gravedad (m/s^2)</th><th scope="col">Comparación con la Tierra</th></tr></thead><tbody>';

    foreach ($MasayRadio as $key => $value) {
        $tabla .= "<tr><td>$key</td><td>$value</td><td>$comparacion[$key]</td></tr>";
    };

    echo <<<HTML

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <div class="container text-center p-3">
        <h1 style="color: white;">La gravedad de los planetas es: $tabla</h1>
        <br>
        <a href='index.html'><button class="btn btn-info m-3">Volver</button></a>
    </div>

    HTML;

    */

    /**
     *TODO Punto 5
     */

    /*

    $naves = array(
        "nave1" => 5,
        "nave2" => 3,
        "nave3" => 7,
        "nave4" => 10,
        "nave5" => 2,
        "nave6" => 1,
        "nave7" => 8,
        "nave8" => 4,
        "nave9" => 6,
        "nave10" => 9
    );

    $naves = array_sum($naves);

    echo <<<HTML

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <div class="container text-center p-3">
        <h1 style="color: white;">La suma de la masa de las naves es: $naves </h1>
        <a href='index.html'><button class="btn btn-info">Volver</button></a>
    </div>
    
    HTML;

    */

    /**
     *TODO Punto 6
     */

    /*

    $planetas = array("Sol", "Mercurio" , "Venus" , "Tierra" , "Marte" , "Jupiter" , "Saturno" , "Urano" , "Neptuno");
    
    $planetas = array_map(function($value){
        $value = strtolower($value);
        return $value;
    }, $planetas);

    $planeta = $_POST["planeta"];

    $planeta = strtolower($planeta);

    $planetas = in_array($planeta, $planetas);

    if ($planetas == true) {
        echo <<<HTML

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <div class="container text-center p-3">
            <h1 style="color: white;">El planeta $planeta existe en nuestro sistema solar</h1>
            <a href='index.html'><button class="btn btn-info">Volver</button></a>
        </div>
        
        HTML;
    } else {
        echo <<<HTML

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <div class="container text-center p-3">
            <h1 style="color: white;">El planeta $planeta no existe en nuestro sistema solar</h1>
            <a href='index.html'><button class="btn btn-info">Volver</button></a>
        </div>
        
        HTML;
    }

    */

    /**
     *TODO Punto 7
     */

    /*

    $naves = array(
        "nave1" => "Emperatriz",
        "nave2" => "Fenix",
        "nave3" => "Galactica",
        "nave4" => "Halcon",
        "nave5" => "Imperial",
    );

    $naves = array_map(function($value){
        $value = strtolower($value);
        return $value;
    }, $naves);

    $nave = $_POST["nave"];

    $nave = strtolower($nave);

    $naves = in_array($nave, $naves);

    if ($naves == true) {
        echo <<<HTML

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <div class="container text-center p-3">
            <h1 style="color: white;">La nave tipo $nave existe en la flota de naves</h1>
            <a href='index.html'><button class="btn btn-info">Volver</button></a>
        </div>
        
        HTML;
    } else {
        echo <<<HTML

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <div class="container text-center p-3">
            <h1 style="color: white;">La nave tipo $nave no existe en la flota de naves</h1>
            <a href='index.html'><button class="btn btn-info">Volver</button></a>
        </div>
        
        HTML;
    }

    */

    /**
     *TODO Punto 8
     */

    /*
     $planetas = array("Sol", "Mercurio" , "Venus" , "Tierra" , "Marte" , "Jupiter" , "Saturno" , "Urano" , "Neptuno");

     $numero = array_rand($planetas, 1);

    $planeta = $planetas[$numero];

    echo <<<HTML

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <div class="container text-center p-3">
    <h1 style="color: white;">El planeta seleccionado aleatoriamente para explorar es: $planeta</h1>
    <a href='index.html'><button class="btn btn-info">Volver</button></a>
    </div>

    HTML;

    */

    /**
     *TODO Punto 9
     */

    /*
     $aliens = array(
        "alien1" => "Alienigena",
        "alien2" => "Depredador",
        "alien3" => "E.T.",
        "alien4" => "Extraterrestre",
        "alien5" => "Marciano",
        "alien6" => "Predator",
        "alien7" => "Xenomorfo",
        "alien8" => "Depredador",
        "alien9" => "E.T.",
        "alien10" => "Marciano",
    );

    $aliens = array_unique($aliens);

    $tabla = '<table class="table table-dark table-striped table-hover text-center"><thead><tr><th scope="col">Tipos de aliens</th></tr></thead><tbody>';

    foreach ($aliens as $key => $value) {
        $tabla .= "<tr><td>$value</td></tr>";
    }

    echo <<<HTML
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <div class="container text-center p-3">
    <h1 style="color: white;">Tabla de tipos de aliens</h1>
    $tabla
    </tbody></table>
    <a href='index.html'><button class="btn btn-info">Volver</button></a>
    </div>

    HTML;

    */

    /**
     *TODO Punto 10
     */

    /*

    $planetas1 = array("Sol", "Mercurio" , "Venus" , "Tierra" , "Marte" , "Jupiter" , "Saturno" , "Urano" , "Neptuno");

    $planetas2 = array("Sol", "Mercurio" , "Venus" , "Tierra" , "Marte" , "Kepler-438b", "Gliese 667 Cc" , "HD 40307g" , "Kepler-442b");

    $planetas = array_intersect($planetas1, $planetas2);

    $tabla = '<table class="table table-dark table-striped table-hover text-center"><thead><tr><th scope="col">Planetas en ambos sistemas solares</th></tr></thead><tbody>';

    foreach ($planetas as $key => $value) {
        $tabla .= "<tr><td>$value</td></tr>";
    }

    echo <<<HTML

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <div class="container text-center p-3">
    <h1 style="color: white;">Tabla de planetas en ambos sistemas solares</h1>
    $tabla
    </tbody></table>
    <a href='index.html'><button class="btn btn-info">Volver</button></a>
    </div>

    HTML;

    */

    /**
     *TODO Punto 11
     */

    $planetas1 = array("Sol", "Mercurio" , "Venus" , "Tierra" , "Marte" , "Jupiter" , "Saturno" , "Urano" , "Neptuno");

    $planetas2 = array("Sol", "Mercurio" , "Venus" , "Tierra" , "Marte" , "Kepler-438b", "Gliese 667 Cc" , "HD 40307g" , "Kepler-442b");

    $planetasS1 = array_diff($planetas1, $planetas2);

    $planetasS2 = array_diff($planetas2, $planetas1);

    $tabla1 = '<table class="table table-dark table-striped table-hover text-center"><thead><tr><th scope="col">Planetas únicos el sistema solar 1</th></tr></thead><tbody>';

    foreach ($planetasS1 as $key => $value) {
        $tabla1 .= "<tr><td>$value</td></tr>";
    }

    $tabla2 = '<table class="table table-dark table-striped table-hover text-center"><thead><tr><th scope="col">Planetas únicos el sistema solar 2</th></tr></thead><tbody>';

    foreach ($planetasS2 as $key => $value) {
        $tabla2 .= "<tr><td>$value</td></tr>";
    }

    echo <<<HTML

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <div class="container text-center p-3">
    <h1 style="color: white;">Tabla de planetas únicos en cada sistema solar</h1>
    $tabla1
    </tbody></table>
    $tabla2
    </tbody></table>
    <a href='index.html'><button class="btn btn-info">Volver</button></a>
    </div>

    HTML;


    


?>