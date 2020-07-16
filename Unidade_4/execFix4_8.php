<?php
/*QUESTÃO 08
Considerando a matriz com os índices [0,0],[0,1],[1,0],[1,1] possui os respectivos valores:Bom,Boa,Noite e Dia. Faça um algoritmo em PHP que exiba APENAS a frase "Boa Noite" a partir do posicionamento de cada elemento conforme os índices propostos. Utilize o conceito de array e a estrutura de repetição "foreach" para responder a questão.  
*/
$array = array(
	array("Bom","Boa"),
	array("Noite","Dia")
);
$saud = '';
$saud2 = '';

foreach ($array as $linha) {
	foreach ($linha as $key => $value) {
		if ($value=="Boa") {
			$saud = $value;
		}
		if ($value=="Noite") {
			$saud2 = $value;
		}
	}
}

echo "$saud $saud2";
?>