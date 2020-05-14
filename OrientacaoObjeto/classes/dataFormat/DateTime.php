<?php
// forma primitiva de se trabalhar com datas em PHP
//echo date('d/m/y') . PHP_EOL;

//$data = new DateTime();
//var_dump($data);
//echo $data -> format('d-m-y') . PHP_EOL;
//echo $data -> format('d-m-y H:i:s') . PHP_EOL;
//---------------------------------------------------


/**
 * --> P  representação de periodos: vem antes de dia, mês, ano e semana
 * Y anos
 * M meses
 * D dias
 * w semanas
 * T representação de de tempo: vam antes de hora, minutoe segundo
 * H horas
 * M minutos
 * S segundos
 */
echo date('d/m/y H:i:s') . PHP_EOL;

$data = new DateTime();
$intervalo = new DateInterval('P5Y10M5DT10H50M10S'); // adiciona um periodo de 5 minutos.
$data -> sub($intervalo);
var_dump($data);

