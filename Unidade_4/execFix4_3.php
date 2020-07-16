<?php
/*QUESTÃO 03
A partir do vetor[55,23,66,567,3,8,39,76,2,3], faça um algoritmo em PHP que mostre APENAS O ÍNDICE do maior valor. Utilize o conceito de array e a estrutura de repetição "foreach" para responder à questão
*/

$numeros = [55,23,66,567,3,8,39,76,2,3];
$maior = 0;

foreach ($numeros as $key => $num) {
	if ($num > $maior) {
		$maior = $num;
		$key_max=$key;
		
	}
}
echo "$key_max";
?>