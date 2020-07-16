<?php
/*QUESTÃO 01:
Construir um programa em PHP para ler o nome, a idade, salário e a situação ativo ou inativo de cinco servidores, ao final imprimir o nome, a idade e a situação, para os servidores ativos o salário deverá ter 10% de aumento. Obs. Inserir quebra de linha por servidor.

	$servidor = array(
		array("nome"=>"Pedro","idade"=>30,"salario"=>1500,"situacao"=>true),
		array("nome"=>"Maria","idade"=>55,"salario"=>2000,"situacao"=>true),
		array("nome"=>"Paulo","idade"=>23,"salario"=>1500,"situacao"=>false),
		array("nome"=>"Joana","idade"=>36,"salario"=>2300,"situacao"=>true),
		array("nome"=>"Gabriel","idade"=>47,"salario"=>1450,"situacao"=>false),
	);
	$aumento = 10;

	foreach ($servidor as $value) {
		if ($value["situacao"]) {
			$value["salario"] += $value["salario"] * ($aumento/100);
			echo "Servidor: {$value['nome']}. Idade: {$value['idade']}. Situação: ATIVO. Salário Ajustado: R$ ".number_format($value['salario'],2,",",".").".<br>";
		}else{
			echo "Servidor: {$value['nome']}. Idade: {$value['idade']}. Situação: INATIVO.<br>";
		}

	}
*/
/*QUESTÃO 02:
Faça um algoritmo em PHP que receba a matrícula, o nome e duas notas de 2 alunos. Calcule a média de cada um deles e mostre a matrícula, o nome, as notas 1 e 2 e a média calculada. Utilize o conceito de array e a estrutura de repetição “foreach” para responder à questão.

	$alunos = array(
		array("matricula"=>1,"nome"=>"Pedro","nota1"=>10,"nota2"=>8,"media"=>0),
		array("matricula"=>2,"nome"=>"Ana","nota1"=>5,"nota2"=>9,"media"=>0)
	);
	

	foreach ($alunos as $value) {
		$value["media"] = ($value["nota1"] + $value["nota2"]) / 2;
		echo "Matrícula: {$value['matricula']}. Nome: {$value['nome']}. Nota 1: {$value['nota1']}. Nota 2: {$value['nota2']}. Média: {$value['media']}.<br>";
	}
*/
/*QUESTÃO 03: 
Analise o algoritmo em PHP, abaixo, e marque a alternativa CORRETA que indica o resultado exibido.
<?php
//Algoritmo
#Declaração de Vetor
$vetor = array(2,7,3,8,5,10);
#Cálculo
foreach($vetor as $i){
	$j = 1;
	while($j < $i){
		$j++;
	}
	$i *= $j;
	if($i > 10){
		echo "$i ";
	}
}
?>

	//Algoritmo
	#Declaração de Vetor
	$vetor = array(2,7,3,8,5,10);
	#Cálculo
	foreach($vetor as $i){
		$j = 1;
		while($j < $i){
			$j++;
		}
		$i *= $j;
		if($i > 10){
			echo "$i ";
		}
	}
//Imprimirá  49 64 25 100
*/
/*QUESTÃO 04:
Uma matriz com os índices [0,0], [0,1], [0,2], [1,0], [1,1] e [1,2] possui os respectivos valores: 10, 9, 8, 7, 11 e 5. Faça um algoritmo em PHP que mostre a posição ([linha][coluna]) do MENOR valor encontrado. Considere que o maior valor que matriz pode possuir é 20. Utilize o conceito de array e a estrutura de repetição “foreach” para responder à questão


	$matriz = array(
		array(10,9,8),
		array(7,11,5)
	);

	$menor = 20;
	$posicao = "";

	foreach ($matriz as $linha => $subMatriz) {
		foreach ($subMatriz as $coluna => $value) {
			if ($value < $menor) {
				$menor = $value;
				$posicao = "[$linha] [$coluna]";
			}
		}
	}

	echo "A posição do menor valor é: $posicao.";
*/

/*QUESTÃO 05:
Faça um programa em PHP para Auxiliar os profissionais de Saúde ao combate ao COVID-19 criando uma matriz com os seguintes tipos de medicamentos ANTIBIÓTICO, ANTIVIRAL, ANTIPARAZITÁRIO.  Ao final deve ser mostrado como no exemplo (use foreach):

ANTIBIÓTICO
Azitromicina
Amoxicilina
Doxiciclina

ANTIVIRAL
Remdesivir
Favipiravir
Arbidol

 

ANTIPARAZITÁRIO
Ivermectina 
Anitta 
Nitazoxanida
*/

	$medicamentos = array(
		array("tipo"=>"ANTIBIÓTICO","medicamento1"=>"Azitromicina","medicamento2"=>"Amoxicilina","medicamento3"=>"Doxiciclina"),
		array("tipo"=>"ANTIVIRAL","medicamento1"=>"Remdesivir","medicamento2"=>"Favipiravir","medicamento3"=>"Arbidol"),
		array("tipo"=>"ANTIPARAZITÁRIO","medicamento1"=>"Ivermectina","medicamento2"=>"Anitta","medicamento3"=>"Nitazoxanida")	

	);

		foreach ($medicamentos as $value) {
			echo "{$value['tipo']} <br> {$value['medicamento1']} <br> {$value['medicamento2']} <br> {$value['medicamento3']} <br><br><br>";
		}
?>