<?php
/*QUESTÃO 04:
Faça um algoritmo em PHP que conte de 1 a 20 e some os valores cuja a divisão por 4 seja exata. Mostre os números que serão somados e no final exiba o valor total da soma, utilizar quebra de linha para apresentar valores*/

$soma = 0;
for ($i=1; $i <= 20; $i++) { 
	if ($i % 4==0) {
		echo "$i <br>";
		$soma = $soma + $i;
	}
}
echo "<br>Soma dos valores = $soma ";

echo "<br><br><br>";

$soma2 = 0;
$j = 1;
do {
	if ($j % 4==0) {
		echo "$j <br>";
		$soma2 = $soma2+$j;
	}
	
} while ( $j++ <= 20);
echo "<br>Soma dos valores = $soma2 ";

echo "<br><br><br>";

$soma3 = 0;
$k = 1;
while ( $k++ <= 20) {
	if ($k % 4==0) {
		echo "$k<br>";
		$soma3 = $soma3 + $k;
	}
	
}
echo "<br>Soma dos valores = $soma3";

?>