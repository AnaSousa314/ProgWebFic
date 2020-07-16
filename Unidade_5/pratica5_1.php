<?php
#Função Date

date_default_timezone_set('America/Belem');

echo date('d/m/Y');
echo "<br>";

echo date('Y');


echo "<br>";


$data = '2020-07-10 15:47:00';
echo date('H:i:s',strtotime($data));

echo "<br>";

echo date('d/m/Y à\s H:i',strtotime($data));
?>