<?php 
	$i = 1;//contador

	//do{
	//executa pelo menos 1 vez e depois continua enquanto a condição for verdadeira
	do{
		echo "linha ".$i." // ";//saida exibida
		$i++;//enquanto o bloco for executado o valor da variavel será somado +1
	}while ($i<=2);//fim do bloco  

echo "<br><br><br><br>";

echo "Outro exemplo:<br>";

$j=1;//contador

//executa pelo menos uma vez e depois continua enquanto a condição for verdadeira
do {//neste exemplo o bloco encerra, pois a condição é falsa, mesmo somando +1
	echo "linha ".$j." // ";
	$j++;
	
} while ( $j== 3);//fim do bloco


?>