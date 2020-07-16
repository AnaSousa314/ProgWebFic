<?php
#FUNÇÕES EXTERNAS (CRIADAS PELO PROGRAMADOR)

function soma2(){
	$vlr_1 = 13;
	$vlr_2 = 7;
	$soma = $vlr_1 + $vlr_2;
	return $soma;
}

//Criando uma variavel para receber o valor da função e somar mais 5. Eu não sabia que podia fazer isso
$novaSoma = 5 + soma2();
echo $novaSoma;
echo "<br>".soma2();
?>