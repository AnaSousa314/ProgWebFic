<?php

//Pesquisar um valor no Array

$estadoPara = array("Salinas","Ananindeua","Breves","Santarém");

//array_search(palavra para pesquisar, array para pesquisa)

echo $pesCid = array_search('Santarém', $estadoPara);
echo "<br>";
echo $pesCid = array_search('Ananindeua', $estadoPara);
echo "<br>";
echo $pesCid = array_search('Castanhal', $estadoPara);//Volta sem retorno, pois não existe esse valor no array

echo "<br>";
//Usa-se as funções "print_r" ou "var_dump" para listar os indices e os valores dos arrays
print_r($estadoPara);
echo "<br><br>";
var_dump($estadoPara);
?>