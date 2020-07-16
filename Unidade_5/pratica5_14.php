<?php
//stristr($array, caractere(s)) retorna parte da string a partir de um parâmetro caractere(s) para a pesquisa, considerando a primeira ocorrencia (localização) e sem diferenciar maiusculas de minusculas. Pode retornar o contéudo anterior ou posterior da string

$palavra = "Curso Fic IFPA";

echo stristr($palavra, 'o');
echo "<br>";
echo stristr($palavra, 'o',true);
echo "<br>";
echo stristr($palavra, 'fic');
echo "<br>";
echo stristr($palavra, 'FIC',true);
echo "<br>";



?>