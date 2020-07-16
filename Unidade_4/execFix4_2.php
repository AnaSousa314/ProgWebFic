<?php
/*QUESTÃO 02
A partir do vetor[10,9,8,7,6,5,4,3,2,1,0], faça um algoritmo em PHP que mostre os números ímpares deste vetor e seus índices. Utilize o conceito de array e a estrutura de repetição "foreach" para responder à questão.
*/

$numeros = [10,9,8,7,6,5,4,3,2,1,0];

foreach ($numeros as $key => $num) {
	if ($num % 2>0) {
		echo "Índice [$key] número ímpar $num<br>";
	}
}

?>