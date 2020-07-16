<?php
//md5(str) Calcula o 'hash MD5' de uma string usando RSA Data Security, Inc. MD5 Message-Digest Algorithm, e devolve esse hash, ou seja, permite "criptografar" um valor de qualquer tipo

$palavra = 'IFPA';
$numero = 915;
$cript = md5($palavra);
$cript1 = md5($numero);

echo $palavra;
echo "<br>";

echo $cript; 
echo "<br>";
echo $cript1;


?>