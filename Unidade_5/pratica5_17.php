<?php

function soma1($param1){
	$vlr2 = 7;
	$soma = $param1 + $vlr2;
	echo $soma;
}

soma1(12);
echo "<br>";
//ou

$vlr1 = 12;
soma1($vlr1);

function soma2($param1,$param2){
	$soma = $vlr1 + $vlr2;
	return $soma;
}
echo soma2(13,7);
echo "<br>";
//ou

$vlr1 = 13;
$vlr2 = 7;
echo soma2($vlr1,$vlr2);
echo "<br>";
//ou

echo soma2(13,$vlr2);



?>