<?php 
/*QUESTÃO 01:
Faça um algoritmo em PHP para mostrar a tabuada (multiplicação) de 0 a 10 do número 6*/
	function tabMult($num){
		
		for ($i = 0; $i <=10 ; $i++) { 
			$mult = $i * $num;
			echo "$i X $num = $mult <br>";
		}

		echo "<br><br><br>";

		$j = 0;
		while ( $j <= 10) {
			$mult = $j * $num;
			echo "$j X $num = $mult <br>";
			$j++;
		}

		echo "<br><br><br>";

		$k = 0;
		do {
			$mult = $k * $num;
			echo "$k X $num = $mult <br>";
			$k++;
		} while ($k <= 10);
	}
	tabMult(6);
?>