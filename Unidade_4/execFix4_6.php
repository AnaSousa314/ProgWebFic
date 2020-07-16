<?php
/*QUESTÃO 06 
Faça um algoritmo em PHP para exibir o valor total da multiplicação entre o valor do 3º índice da matriz "A"[12,15,9,46,51,87,45,2,68] e o 4º índice da matriz "B"[5,90,25,6,20,82,101,9,78], considere que as duas matrizes possuem o mesmo número de elementos (9). Utilize o conceito de array e a estrutura de repetição "foreach" para responder à questão. 
*/


$A=array(12,15,9,46,51,87,45,2,68);
$B=array(5,90,25,6,20,82,101,9,78);
$multiplica =1;


foreach ($A as $key => $value) {
	if ($key==3) {
		$multiplica = $multiplica*$value;
		}
}
//echo "$multiplica<br>";

foreach ($B as $key => $value) {
	if ($key==4) {
	$multiplica = $multiplica*$value;
	}
}

echo "O valor da multiplicação é $multiplica";


?>