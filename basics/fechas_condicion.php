<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condiconales</title>
</head>

<body>
    <?php
    $dia = date("d");
    echo "Dia: " . $dia;
    $diaLetras = date("D");
    echo "<br> Día en letras: " . $diaLetras; //CONCATENACION CON PUNTO
    $diaSemana = date("N");
    echo "<br>Número Día semana: $diaSemana"; //CONCATENACION CON COMILLAS
    echo '<br>Número Día semana: $diaSemana'; //NO SE CONCATENA LA VARIABLE
    //MOSTRAR MIERCOLES
    $diasVector = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
    echo "<br><hr>Día semana" . $diasVector[$diaSemana - 1];
    echo "<br>Día semana {$diasVector[$diaSemana - 1]}"; //INTERPOLACION
    /*****************************/
    $mesesVector = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septimbre", "Octubre", "Noviembre", "Diciembre"];
    $mesNúmero = date("n");
    echo "<br><hr>Mes: {$mesesVector[$mesNúmero - 1]}";
    /*****************************/
    //CONDICIONALES EN PHP
    if ($diaSemana <= 15 && $mesNúmero <= 11) {
        echo "<br><hr>Ahorrando para el Black Friday";
    } else {
        echo "<br><hr>Gastandome el dinero en el Black Friday";
    }
    /*****************************/
    $numAleatorio = rand(1, 3000);
    echo "<hr>Número aleatorio: $numAleatorio<br>";
    if ($numAleatorio <= 1000) {
        echo "El Número es menor a 1000";
    } elseif ($numAleatorio <= 1500) {
        echo "El número esta entre 1000 y 1500";
    } elseif ($numAleatorio <= 2000) {
        echo "El Número esta entre 1500 y 2000";
    } else {
        echo "El Número es mayor a 2000";
    }

    ?>
</body>

</html>