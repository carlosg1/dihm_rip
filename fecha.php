<?php
/** fecha actual */

@date_default_timezone_set("America/Argentina/Buenos_Aires");

@setlocale(LC_ALL,"es_ES");

$diaDeLaSemana = Array(
    0 => 'Domingo, ',
    1 => 'Lunes, ',
    2 => 'Martes, ',
    3 => 'Miercoles, ',
    4 => 'Jueves, ',
    5 => 'Viernes, ',
    6 => 'Sabado, ',
    7 => 'Domingo, ',
);

$mesDelAnio = Array(
    1 => 'Enero',
    2 => 'Febrero',
    3 => 'Marzo',
    4 => 'Abril',
    5 => 'Mayo',
    6 => 'Junio',
    7 => 'Julio',
    8 => 'Agosto',
    9 => 'Septiembre',
    10 => 'Octubre',
    11 => 'Noviembre',
    12 => 'Diciembre',
);

$fecha = $diaDeLaSemana[ date('N') ] . date('j') . ' de ' . $mesDelAnio[ date('n')] . ' de ' .  date('Y');

echo $fecha;


?>

