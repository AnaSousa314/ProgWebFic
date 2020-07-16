<?php
/*QUESTÃO 01:
Faça um algoritmo em PHP que some os números de 1 a 25 e imprima o valor total da soma. Utilize a estrutura de repetição "for".

	function soma(){
		$res = 0;
		for ($i=1; $i <=25 ; $i++) { 
			$res += $i;
		}
	return $res;
	}
echo soma();*/

/*QUESTÃO 02:
Escreva um algoritmo em PHP que calcule o produto (multiplicação) dos inteiros ímpares de 1 a 15 e, então, exiba os resultados. Utilize a estrutura de repetição "for".
//só para conferir quais são primos
	function impar(){
		for ($i=1; $i <=15 ; $i++) { 
			if ($i%2>0) {
				echo "$i<br>";
			}
		}
	}
	echo impar();
	
	function produto(){
		$res = 1;
		for ($i=1; $i <=15 ; $i++) { 
			if ($i % 2>0) {				
				$res *= $i;
				echo "$res<br>";
			}
		}
	}

	echo produto();
	*/

/*QUESTÃO 03:
Faça um algoritmo em PHP que leia um conjunto de números de 23 a 51 e imprima a quantidade de números pares (qPares) e a quantidade de números impares (qImpares) lidos. Utilize a estrutura de repetição "while".
//só para conferir quais são os pares
function numeros(){
	for ($i=23; $i <=51 ; $i++) { 
		if ($i%2==0) {
			echo "$i<br>";
		}
	}
}	
echo numeros();


function par_impar(){
	$qPares = 0;
	$qImpares = 0;
	$i = 23;

	while ( $i<= 51) {
		if ($i % 2==0) {
			//echo "$qPares $i <br>";
			$qPares++;
		}else{
			$qImpares++;
			//echo "$i<br>";
		}
		$i++;
	}

	return "$qPares<br>$qImpares";
}

echo par_impar();
*/

/*QUESTÃO 04:
Chico tem 1,50 metros e cresce 2 centímetros por ano, enquanto Zé tem 1,10 metros e cresce 3 centímetros por ano. Construa um algoritmo em PHP que calcule e imprima quantos anos serão necessários para que Zé seja maior que Chico.Utilize a estrutura de repetição "do ... while".*/

$chico=1.50;
$chicoCres = 0.02;//centimetros em metros
$ze = 1.10;
$zeCres = 0.03;//centimetros em metros

$anos=0;

do {
	$chico+=$chicoCres;

	$ze+=$zeCres;
	$anos++;
} while ($ze<=$chico);

echo "São necessários $anos anos para que Zé fique mais alto que Chico.<br>";

?>