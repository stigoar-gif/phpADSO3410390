<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>

    <head>

    <body>
        <?php
        $limite = 50;
        for ($i = 1; $i <= $limite; $i++) {
            # Impresion de los numeros del 0 al 50
            echo    "Numero: $i<br>";
        }
        //ciclo while 
        $limite = rand(50, 100);
        $inicio = 1;
        #impresion de numeros del 1 al limite aleatorio entre (50 ,100)
        while ($inicio <= $limite) {
            echo "[WHILE] Numero: " . $inicio . "<br>";
            $inicio++;
        }
        //do while
        $dia = date("d");
        $inicio = rand(10, 20);
        #Mostrar los numeros del 1 a la fecha actual
        do {
            echo "[DO-WHILE] Numero: " . $inicio . "<br>";
            $inicio++;
        } while ($inicio <= $dia);
        echo "<hr>";

        //Mostrar la tabla de multiplicar del 2 
        #utilizar FOR, WHILE Y DO WHILE
        //CICLO FOR 
        $numero = 2;
        for ($i = 1; $i <= 10; $i++) {
            echo "[FOR]$numero * $i = " . ($numero * $i) . "<br>";
        }
        echo "<hr>";

        //CICLO WHILE
        $inicio = 1;
        while ($inicio <= 10) {
            $tabla = $inicio * 2;
            $inicio++;
            echo "<br>";
            echo "[WHILE] 2 * " . ($inicio - 1) . " = " . $tabla;
        }

        //CICLO DO WHILE
        echo "<hr>";
        $inicio = 1;
        do {
            $tabla = $inicio * 2;
            $inicio++;
            echo "<br>";
            echo "[DO..WHILE] 2 * ".($inicio - 1). " = ".$tabla;
        } while ($inicio <= 10);
        ?>
    </body>

</html>