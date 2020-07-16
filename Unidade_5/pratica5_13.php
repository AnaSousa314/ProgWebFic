<?php
#Funções para String 
// strlen(string) Retorna o tamanho de uma string

$palavra1 = "CursoFicIFPA";
echo strlen($palavra1);

echo "<br>";

$palavra2 = "Curso Fic IFPA"; //Conta letras e espaços
echo strlen($palavra2);

echo "<br>";

//Toda string pode ser considerada um "array", onde cada letra tem um índice. Logo, qualquer caractere pode ser recuperado individualmente através da sua posição. OBS. Espaços também são considerados como índices.

echo "[índice] => Caractere <br>";
for ($i=0; $i < strlen($palavra2); $i++) { 
	echo  "[$i] => ".$palavra2[$i]."<br>";
}

echo "<br>";




?>