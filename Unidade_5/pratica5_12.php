<?php
// asort(array) Ordena um array pelo valor, mantendo a associação de índices e valores;

// ksort(array) Ordena um array pelo índice, mantendo a associação de índices e valores;

$estadoPara = array("a"=>"Parauapebas","c"=>"Ananindeua","s"=>"Breves","p"=>"Santarém","b"=>"Curuçá");

asort($estadoPara);//Ordenação por valor
foreach ($estadoPara as $key => $value) {
	echo "$key = $value"."<br>";
}
/*
Resultado é o array com os valores organizado em ordem alfabética
c = Ananindeua
s = Breves
b = Curuçá
a = Parauapebas
p = Santarém
*/

echo "<br>";

//Ordenação em ordem crescente 
ksort($estadoPara);//Ordenação por índice
foreach ($estadoPara as $key => $value) {
	echo "$key = $value"."<br>";
}

echo "<br>";

//Ordenação em ordem decrescente
krsort($estadoPara);//Ordenação por índice
foreach ($estadoPara as $key => $value) {
	echo "$key = $value"."<br>";
}

?>