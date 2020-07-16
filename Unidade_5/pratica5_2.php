<?php 
#Função 'strtotime'

$data = '2020-07-05 15:52:00';

//Adiciona 1 dia a variavel $data
$timestampAtual = strtotime('+1 day',strtotime($data));

echo $timestampAtual;

echo "<br>";

//Para formatar o valor de $timestampAtual deve-se usar a função date
echo date('d/m/Y',$timestampAtual);

echo "<br>";

//Adiciona 1 hora na variável $data
$timestampAtual = strtotime('+1 hour',strtotime($data));
echo $timestampAtual;
echo "<br>";

//Para formatar o valor de $timestampAtula deve-se usar a função 'date'
$dtAtual = strtotime('2020-07-11 10:30:00');
$dtAnterior = strtotime('2020-07-11 10:30:00' );

//Diferença entre as datas e divide pelo número de segundos que um dia possui
$dtDiferenca = ($dtAtual-$dtAnterior)/86400;//86400 segundos que um dia possui

echo $dtDiferenca;
?>