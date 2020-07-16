<?php
/*QUESTÃO 07
Considerando uma matriz com os índices [0,0],[0,1],[0,2],[1,0],[1,1] e [1,2] possui os respectivos valores: 10,9,8,7,11 e 5. Faça um algoritmo em PHP que mostre a posição ([linha][coluna]) do maior valor encontrado. Utilize o conceito de array e a estrutura de repetição "foreach".
*/
$matriz = array(
	array(10,9,8),
	array(7,11,5)
);
$max = NULL;
$posicao = "";

foreach ($matriz as $linha => $subMatriz) {
	foreach ($subMatriz as $coluna => $value) {
		if ($value>=$max) {
			$max = $value;
			$posicao = "[$linha][$coluna]";

		}
	}
}
echo "O maior valor é: $max. E fica na posição: $posicao";

?>