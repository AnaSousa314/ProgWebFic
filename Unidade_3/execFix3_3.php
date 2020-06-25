<?php 
/*QUESTÃO 03:
Faça um algoritmo em PHP que conte de 1 a 10 e mostre os números impares.*/
 
for ($i=1; $i <= 10; $i++) { 
	if ($i % 2>0) {
		echo "$i ";
	}
}

echo "<br><br>";

$j=1;
while ($j<= 10) {
	if ($j % 2>0) {
		echo "$j ";
	}
	$j++;
}

echo "<br><br>";

$k=1;
do {
	if ($k % 2>0) {
		echo "$k ";
	}
	$k++;
} while ( $k<= 10);
 ?>