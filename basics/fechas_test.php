<?php
//Imprimir en php --> echo
//http:/localhost/adso3410390/fechas_test.php
echo "Fecha Actual: " . "</br>";
echo date("Y-m-d H:i:s") . "<br>";

// 1. Formatos solo de fecha
echo date('Y-m-d') . "<br>"; // 2026-10-26 (ISO estándar)

echo date('d/m/Y') . "<br>";        // 26/10/2026 (Tradicional)

echo date('d-m-y') . "<br>";        // 26-10-26 (Año corto)

echo date('j, n, Y') . "<br>";      // 26, 10, 2026 (Sin ceros iniciales)


// 2. Formatos con texto y días de la semana (en inglés por defecto)
echo date('D, d M Y') . "<br>";     // Mon, 26 Oct 2026
echo date('l, jS \o\f F Y') . "<br>"; // Monday, 26th of October 2026

// 3. Formatos de fecha y hora
echo date('Y-m-d H:i:s') . "<br>";  // 2026-10-26 12:16:00 (24h)
echo date('d/m/Y h:i:s A') . "<br>"; // 26/10/2026 12:16:00 PM (12h)


//2.
// Configurar la zona horaria (reemplaza 'America/Bogota' por tu país/ciudad)
date_default_timezone_set('America/Bogota');

// Configurar el idioma local a español
setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'Spanish');

// 1. Obtener el día de la semana y el mes en español de forma nativa
$dias = ['domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado'];
$meses = ['', 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];

$dia_semana = $dias[date('w')];
$dia_mes = date('j');
$mes = $meses[date('n')];
$anio = date('Y');

// 2. Obtener la hora con formato de 12 horas y minúsculas (p.m. / a.m.)
$hora = str_replace(['AM', 'PM'], ['a.m.', 'p.m.'], date('h:i A'));

// 3. Imprimir el resultado
echo "hoy es $dia_semana $dia_mes de $mes de $anio y son las $hora";
