<?php

$data = new DateTime();
$data->format('d-m-y H:i:s');

$intervalo = new DateInterval('P5DT10H50M');
$data->sub($intervalo);

echo $data->format('d-m-y H:i:s');

/*var_dump($data);*/
