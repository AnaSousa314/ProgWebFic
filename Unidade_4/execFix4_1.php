<?php
/*QUESTÃO 01:
A partir do vetor[55,23,66,567,3,8,39,76,2,31,10], faça um algoritmo em PHP que mostre os números pares deste vetor e seus índices. Utilize o conceito de array e a estrutura de repetição "foreach" para responder à questão.*/

$numeros =[55,23,66,567,3,8,39,76,2,31,10];

foreach ($numeros as $key => $num) {
	if ($num % 2==0) {
		echo "Índice [$key]"." número par ".$num."<br>";
	}
}

echo "<br><br>";
//outra forma sem o indice
foreach ($numeros as $num) {
	echo "$num ";
}

echo "<br><br>";

//outra forma com o for
for ($i=0; $i < sizeof($numeros) ; $i++) { 
	echo "$i $numeros[$i]<br>";
}

echo "<br><br>";
//outra forma com print_r
print_r($numeros);


?>