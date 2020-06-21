<?php 
	/*6) Qual é a distância máxima que um carro alcança com R$ 20,00 de gasolina sabendo que o litro de gasolina custa R$ 3,79 e que esse carro tem um consumo médio de 10,9 km/l? Faça um algoritmo que calcule e mostre o resultado.*/

	$a = 20;
	$custo = 3.79;
	$consMed = 10.9;
	$distMax = 0;

	$distMax = ($a * $consMed)/$custo;

	echo "A distância máxima é de ".$distMax." quilometros.";




 ?>