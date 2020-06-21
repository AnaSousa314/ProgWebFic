<?php 
	/*7) Faça um algoritmo que calcule e mostre a idade de uma pessoa em anos e meses, a partir do ano atual e o ano de nascimento informado.*/

	$anoAtual = 2020;
	$anoNasc = 1995;
	$idAno = 0;
	$idMeses = 0;

	$idAno = $anoAtual - $anoNasc;
	$idMeses = $idAno * 12;

	echo "Idade em anos ".$idAno."<br>";
	echo "Idade em meses ".$idMeses;



 ?>