<?php
/*QUESTÃO 04
A partir do array abaixo, faça um algoritmo em PHP que apresente um novo array, sendo que este deve possuir como índices e valores os valores e índices, respectivamente, do array "banda". No final EXIBA O NOVO arranjo, apresentando o índice e o valor. Dica: declare uma nova variável do tipo array para realizar a inversão. Utilize o conceito de array e a estrutura de repetição "foreach" para responder à questão.*/

$banda = array(99 => "Simone_Simaria", 0 => "AF", 1 => "Ar15", 17 => "Molejo");

$banda2 = array();

foreach ($banda as $key => $nome) {
	$banda2[$nome] = $key;	
}
print_r($banda2);
echo "<br><br>";


//ou

foreach ($banda as $key => $nome) {
	$banda2[$nome] = $key;	
}

echo "O novo arranjo é :<br>";
foreach ($banda2 as $keyAux => $nome2) {
	echo '$banda2['.$keyAux." = $nome2]<br>";
}
echo "<br><br>";



echo "<br><br>";
//ou muito mais simples

$banda2 = array_flip($banda); 
print_r($banda2);


?>