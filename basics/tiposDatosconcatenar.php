<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title></title>
</head>

<body>
    <?php
    //TIPOS DE VARIABLES
    // EN PHP NO ES NECESARIO DECLARAR TIPOS DE DATOS 
    $dia = 4; //TIPO INT
    $salario = 2000000.50; //TIPO DOUBLE
    $nombre = "Stiven"; //TIPO STRING 
    $estado = true; //TIPO BOOLEAN

    //IMPRESION DE VBLES
    echo "<br>Vble tipo entero: $dia";
    echo "<br>Vble tipo double: " . $salario;
    echo "<br>Vble tipo string: " . $nombre;
    echo "<br>Vble tipo boolean: " . $estado;
    echo "<hr>";

    echo "{$nombre} gana \$$salario"; //INTERPOLACION Y ESCAPES DE CARACTERES
    echo "<br>";
    $texto = sprintf("Hoy es $ %d", $dia); //SIRVE PARA FORMATEAR EL NUMERO 
    echo $texto;
    $peras = 3;
    $manzanas = 5;
    $mangos = 4;
    $precioFrutas = 25500.30;

    //USO DE SPRINTF
    $texto = sprintf("Soy %s y tengo %d peras, %d manzanas, y %d mangos y costaron $%.2f", $nombre, $peras, $manzanas, $mangos, $precioFrutas);
    echo "<br>" . $texto;

    //USO DE HEREDOC
    echo "<hr>";
    $titulo = "Programa de Formación";
    $texto = "Analisis y Desarrollo de Software";
    $html = <<<HTML
        <div class="card" >
            <h2>$titulo</h2>
            <p>$texto</p
        </div>
    HTML;
    echo $html;

    //NUMERO ALEATORIO
    echo "<hr>";
    $numAleatorio = rand(10, 15);
    $numeroVector = ["Diez", "Once", "Doce", "Trece", "Catorce", "Quince"];
    echo "Numero Aleatorio: $numAleatorio ";
    echo "<br>El Numero Aleatorio es: " . $numeroVector[$numAleatorio - 10];
    ?>
</body>

</html>