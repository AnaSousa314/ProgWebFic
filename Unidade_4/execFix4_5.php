<?php
/*A partir do array abaixo, faça um algoritmo em PHP que troque o trecho da música com o título descrito "_tucara", de "Eu te conheço só de olhar na tua cara" para "Lá fora o mundo gira e aqui dentro". No final exiba o arranjo atualizado. Utilize o conceito de array e a estrutura de repetição "foreach" para responder a questão*/
/*
$musicSimoneSimaria = array("regimeFechado"=>"Não quero advogado quero regime fechado", "mel_bom"=>"Mas quando o mel é bom a abelha sempre volta", "_tucara"=>"Eu te conheço só de olhar na tua cara");
	
foreach ($musicSimoneSimaria as $key => $value) {
	if ($key=="_tucara") {
		$musicSimoneSimaria["_tucara"]="Lá fora o mundo gira e aqui dentro";
		print_r($musicSimoneSimaria);
	}
}

//print_r($musicSimoneSimaria);
*/

	function duracaoBeta($cO,$cM,$cP){
		$cE = ($cO+(4*$cM)+$cP)/6;
		$s = ($cP-$cO)/6;
		echo "cE = ".$cE."    s = ".$s."<br><br>";

	}

	duracaoBeta(16,26,49);//A
	duracaoBeta(43,62,91);//B
	duracaoBeta(41,46,50);//C
	duracaoBeta(31,39,44);//D
	duracaoBeta(15,18,27);//E
	duracaoBeta(10,12,15);//F

	echo "<br><br><br>";


?>