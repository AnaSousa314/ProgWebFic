<?php
/*QUESTÃO 05:
Faça um algoritmo em PHP para ler o alfabeto (utilizar estrutura de repetição) e exibir apenas vogais (utilizar estrutura de seleção "switch"). OBS: A execução da estrutura de repetição deve parar quando for identificado a letra "O", avisar o usuário que o algoritmo encerrou e informar o número de consoantes registradas antes da execução parar.*/
/*
foreach (range('A', 'Z') as $letra) {
	echo "$letra ";
}

echo "<br><br><br><br>";

for($letra = ord("A"); $letra <= ord('Z'); $letra++)
{
   echo chr($letra).",";
}

echo "<br><br><br><br>";
*/
for ($i='A'; $i != 'AA'; $i++) { 
	echo "$i ";
}

echo "<br><br><br><br>";
$letra = 'A';
$consoante = 0;
while ($letra != 'AA') {

		//echo "$letra ";
		switch ($letra) {
		case 'A':
		case 'E':
		case 'I':
		case 'O':
		case 'U':
			echo "Vogal: $letra <br>";
				
			break;
		
		default:
			$consoante++;
			break;
	}

	if ($letra == "O") {
		echo "<br>### Execução Encerrada! ###<br>";
		break;
	}

	$letra++;
}
echo "Número de consoantes registradas: ".$consoante;

echo "<br><br><br>";

$consoante1 = 0;
$letra1 = 'A';
do {
	switch ($letra1) {
		case 'A':
		case 'E':
		case 'I':
		case 'O':
		case 'U':
			echo "Vogal: $letra1 <br>";
				
			break;
		
		default:
			$consoante1++;
			break;
	}

	if ($letra1 == "O") {
		echo "<br>### Execução Encerrada! ###<br>";
		break;
	}

	$letra1++;
} while ($letra1!="AA");
echo "Número de consoantes registradas: $consoante1";


echo "<br><br><br>";


$consoante2 = 0;
for ($letra2='A'; $letra2 != 'AA'; $letra2++) { 
	switch ($letra2) {
		case 'A':
		case 'E':
		case 'I':
		case 'O':
		case 'U':
			echo "Vogal: $letra2 <br>";
			break;
		
		default:
			$consoante2++;
			break;
	}

	if ($letra2 == "O") {
		echo "<br>### Execução Encerrada! ###<br>";
		break;
	}
}
echo "Número de consoantes registradas: $consoante2";
/*
$abc = 'a';
$consoante = 0;

while ($abc <= 'z') {
	switch ($abc) {
		case 'a':
		case 'e':
		case 'i':
		case 'o':
		case 'u':
			echo "Vogal: $abc <br>";	
			break;
		
		default:
			$consoante++;
			break;
	}

	if ($abc == "o") {
		echo "<br>### Execução Encerrada! ###<br>";
	}

	$abc++;
}
echo "Número de consoantes registradas: $consoante";
*/
?>