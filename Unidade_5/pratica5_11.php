<?php
//array_rand(input) escolhe aleatorimente um ou mais itens de um array
$estadoPara = array("Salinas","Ananindeua","Breves","Santarém");

$arraySort1 = array_rand($estadoPara);
echo $estadoPara[$arraySort1];

echo "<br><br>";

$arraySort2 = array_rand($estadoPara,2);
echo $estadoPara[$arraySort2[0]]."<br>";
echo $estadoPara[$arraySort2[1]];
?>