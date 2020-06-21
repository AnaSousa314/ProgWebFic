<?php  
/*QUESTÃO 01:
Escreva um algoritmo em PHP para receber dois valores (considere que não serão lidos valores iguais utilizando estrutura condicional) e mostrar o maior deles. Utilize a estrutura de decisão if ... else.

	function maior($n1,$n2){
		if ($n1 > $n2) {
			echo "$n1 é MAIOR que $n2.";
		}else{
			echo "$n2 é MAIOR que $n1";
		}
	}

	maior(6,3);
*/
/*QUESTÃO 02:
Escreva um algoritmo em PHP para receber os valores: saldo, débito e crédito. Após, calcular e mostrar o saldo atual (saldo atual = saldo - débito + crédito). Também testar se saldo atual for maior ou igual a zero escrever a mensagem 'Saldo Positivo', senão escrever a mensagem 'Saldo Negativo'. Utilize a estrutura de decisão if ... else.

	function sal($saldo,$debito,$credito){
		$saldoAtual = $saldo - ($debito + $credito);
		echo "Saldo Atual de ".number_format($saldoAtual,2,",",".").".<br>";
		if ($saldoAtual >= 0) {
			echo "Saldo Positivo. <br><br>";
		}else{
			echo "Saldo Negativo.";
		}
	}

	sal(1500,200,300);
	sal(1500,750,780);
*/

/*QUESTÃO 03:
Escreva um algoritmo em PHP para receber: quantidade atual em estoque, quantidade máxima em estoque e quantidade mínima em estoque de um produto. E, em seguida, calcular e mostrar a quantidade média ((quantidade média = quantidade máxima + quantidade mínima)/2). Se a quantidade em estoque for maior ou igual a quantidade média escrever a mensagem 'Não efetuar compra', senão escrever a mensagem 'Efetuar compra'. Utilize a estrutura de decisão if ... else.

	function estoque($qtdAt,$qtdMax,$qtdMin){
		$qtdMed = (($qtdMax + $qtdMin)/2);
		if ($qtdAt >= $qtdMed) {
			echo "Não efetuar compra!<br><br>";
		}else{
			echo "Efetuar compra!!!";
		}
	}

estoque(700,1000,200);
estoque(500,1000,200);
*/

/*QUESTÃO 04:
Escreva um algoritmo em PHP para receber o nome de 2 times e o número de gols marcados na partida (para cada time). Escrever o nome do vencedor. Caso não haja vencedor deverá ser impressa a palavra EMPATE. Utilize a estrutura de decisão if ... else.

	 function jogo($time1,$time2,$tgol1,$tgol2){
	 	if ($tgol1 > $tgol2) {
	 		echo "Vencedor: ".$time1."<br><br>";
	 	}elseif ($tgol1 < $tgol2) {
	 		echo "Vencedor: ".$time2."<br><br>";
	 	}else{
	 		echo "EMPATE<br><br>";
	 	}
	 }

	jogo("São Paulo","Grêmio",5,1);
	jogo("São Paulo","Grêmio",1,5);
	jogo("São Paulo","Grêmio",1,1);
*/

/*QUESTÃO 05:	
Escreva um algoritmo em PHP para receber a quantidade adquirida e o preço unitário de um produto. Calcular e exibir o total (total = quantidade adquirida * preço unitário), o desconto e o total a pagar (total a pagar = total - desconto), sabendo-se que:

- Se quantidade menor ou igual que 5, o desconto será de 2%

- Se quantidade maior que 5 e menor ou igual que 10, o desconto será de 3%

- Se quantidade maior que 10, o desconto será de 5%.

OBS.: Utilize a estrutura de decisão if ... else.

	function pagar($qtd,$preco){
		$total = $qtd * $preco;
		if ($qtd <= 5) {
		 	$desconto = 2;
		 	$totalPagar= $total - ($total * ($desconto/100));
		 	echo "Total: R$ ".number_format($total,2,",",".")."<br>";
		 	echo "Desconto: ".$desconto."% <br>";
		 	echo "Total a Pagar R$ ".number_format($totalPagar,2,",",".")."<br><br>";
		 
		 }elseif (($qtd >= 5) &&($qtd <= 10)) {
		 	$desconto = 3;
		 	$totalPagar= $total - ($total * ($desconto/100));
		 	echo "Total: R$ ".number_format($total,2,",",".")."<br>";
		 	echo "Desconto: ".$desconto."% <br>";
		 	echo "Total a Pagar R$ ".number_format($totalPagar,2,",",".")."<br><br>";
		 }elseif ($qtd > 10) {
		 	$desconto = 5;
		 	$totalPagar= $total - ($total * ($desconto/100));
		 	echo "Total: R$ ".number_format($total,2,",",".")."<br>";
		 	echo "Desconto: ".$desconto."% <br>";
		 	echo "Total a Pagar R$ ".number_format($totalPagar,2,",",".")."<br><br>";
		 } 
	}

pagar(2,1);
pagar(6,1);
pagar(11,1);
*/

/*QUESTÃO 06:
Uma empresa irá dar um aumento de salário aos seus funcionários de acordo com a categoria de cada empregado. O aumento seguirá a seguinte regra:

- Funcionários das categorias A e H ganharão 10% de aumento sobre o salário;

- Funcionários das categorias B, D e E ganharão 15% de aumento sobre o salário;

- Funcionários das categorias K e R ganharão 25% de aumento sobre o salário;

- Funcionários das categorias S ganharão 35% de aumento sobre o salário;

- Funcionários das categorias X e Z ganharão 50% de aumento sobre o salário.

- Funcionários das demais categorias ganharão 5% de aumento sobre o salário.

Utilizando o comando "Switch", escreva um algoritmo em PHP para receber categoria e salário atual, em seguida exiba o salário reajustado de um empregado para exemplo.

	function aumento($categoria,$salAtual){

		switch ($categoria) {
			case 'A':
			case 'H':
				$salReajus = $salAtual + ($salAtual *(10/100));
				echo "Salário Reajustado: R$ ".number_format($salReajus,2,",",".")."<br><br>";
				break;
			case 'B':
			case 'D':
			case 'E':
				$salReajus = $salAtual + ($salAtual *(15/100));
				echo "Salário Reajustado: R$ ".number_format($salReajus,2,",",".")."<br><br>";	
				break;
			case 'K':
			case 'R':
				$salReajus = $salAtual + ($salAtual *(25/100));
				echo "Salário Reajustado: R$ ".number_format($salReajus,2,",",".")."<br><br>";
				break;
			case 'S':
				$salReajus = $salAtual + ($salAtual *(35/100));
				echo "Salário Reajustado: R$ ".number_format($salReajus,2,",",".")."<br><br>";
				break;
			case 'X':
			case 'Z':
				$salReajus = $salAtual + ($salAtual *(50/100));
				echo "Salário Reajustado: R$ ".number_format($salReajus,2,",",".")."<br><br>";
				break;
			
			default:
				$salReajus = $salAtual + ($salAtual *(5/100));
				echo "Salário Reajustado: R$ ".number_format($salReajus,2,",",".")."<br><br>";
				break;
		}
	}

	aumento('A',1000);
	aumento('D',1000);
	aumento('K',1000);
	aumento('S',1000);
	aumento('Z',1000);
	aumento('J',1000);
*/

/*QUESTÃO 07:
7) Crie um algoritmo em PHP que receba uma mês do ano: um número entre 1 e 12, isto é, correspondendo a um dos meses do ano. Se o usuário introduzir um número que não está neste intervalo, mostre: "Número inválido". Caso contrário, deve imprimir uma mensagem conforme o exemplo: "A estação do ano correspondente ao mês 3 é Verão". Utilize o comando "Switch".

Considere a estação prevalente para cada mês:

a) Janeiro (1): Verão
b) Fevereiro (2): Verão
c) Março (3): Verão
d) Abril (4): Outono
e) Maio (5): Outono
f) Junho (6): Outono
g) Julho (7): Inverno
h) Agosto (8): Inverno
i) Setembro (9): Inverno
j) Outubro (10): Primavera
k) Novembro (11): Primavera
l) Dezembro (12): Primavera	

	function estacao($mes){
		switch ($mes) {
			case 1:
				echo "A estação do ano correspondente ao mês 1 é Verão.<br><br>";
				break;

			case 2:
				echo "A estação do ano correspondente ao mês 2 é Verão.<br><br>";
				break;

			case 3:
				echo "A estação do ano correspondente ao mês 3 é Verão.<br><br>";
				break;	
			case 4:
				echo "A estação do ano correspondente ao mês 4 é Outono.<br><br>";
				break;

			case 5:
				echo "A estação do ano correspondente ao mês 5 é Outono.<br><br>";
				break;

			case 6:
				echo "A estação do ano correspondente ao mês 6 é Outono.<br><br>";
				break;

			case 7:
				echo "A estação do ano correspondente ao mês 7 é Inverno.<br><br>";
				break;

			case 8:
				echo "A estação do ano correspondente ao mês 8 é Inverno.<br><br>";
				break;

			case 9:
				echo "A estação do ano correspondente ao mês 9 é Inverno.<br><br>";
				break;

			case 10:
				echo "A estação do ano correspondente ao mês 10 é Primavera.<br><br>";
				break;

			case 11:
				echo "A estação do ano correspondente ao mês 11 é Primavera.<br><br>";
				break;

			case 12:
				echo "A estação do ano correspondente ao mês 12 é Primavera.<br><br>";
				break;

			default:
				echo "Número inválido.";
				break;
		}
	}

	estacao(1);
	estacao(2);
	estacao(16);
	*/

/*QUESTÃO 08:
Um vendedor precisa de um algoritmo em PHP que calcule e mostre o preço total devido por um cliente. O algoritmo deve receber o código de um produto e a quantidade comprada e calcular o preço total, usando a tabela abaixo. Mostre uma mensagem no caso de código inválido: "Código não identificado!". Utilize o comando "Switch".

Código Preço Unitário

'ABCD' R$ 5,30

'XYPK' R$ 6,00

'KLMP' R$ 3,20

'QRST' R$ 2,50


	function pagar($codigo,$qtd){

		switch ($codigo) {
			case 'ABCD':
				$precoUn = 5.30;
				$precoTotal = $precoUn * $qtd;
				echo "Total: R$ ".number_format($precoTotal,2,",",".")."<br><br>";
				break;

			case 'XYPK':
				$precoUn = 6;
				$precoTotal = $precoUn * $qtd;
				echo "Total: R$ ".number_format($precoTotal,2,",",".")."<br><br>";
				break;

			case 'KLMP':
				$precoUn = 3.20;
				$precoTotal = $precoUn * $qtd;
				echo "Total: R$ ".number_format($precoTotal,2,",",".")."<br><br>";
				break;

			case 'QRST':
				$precoUn = 2.50;
				$precoTotal = $precoUn * $qtd;
				echo "Total: R$ ".number_format($precoTotal,2,",",".")."<br><br>";
				break;
			
			default:
				echo "Código não identificado!!!";
				break;
		}
	}

	pagar('ABCD',2);
	pagar('XYPK',2);
	pagar('KLMP',2);
	pagar('QRST',2);
*/

/*QUESTÃO 09:
Faça um algoritmo em PHP que leia a primeira letra (letra maiúscula) do estado civil de uma pessoa e mostre uma mensagem com a sua descrição (Solteiro, Casado, Viúvo, Divorciado, União Estável). Mostre uma mensagem de erro, se necessário. Utilize o comando "Switch".
	function estado($estCiv){

		switch ($estCiv) {
			case 'S':
				echo "Solteiro<br>";
				break;
			case 'C':
				echo "Casado<br>";
				break;
			case 'V':
				echo "Viúvo<br>";
				break;
			case 'D':
				echo "Divorciado<br>";
				break;
			case 'U':
				echo "União Estável<br>";
				break;
			default:
				echo "Erro<br>";
				break;
		}
	}	

	estado('S');
	estado('C');
	estado('V');
	estado('D');
	estado('U');
	estado('Z');
	*/

/*QUESTÃO 10:
Uma sorveteria vende três tipos de picolés. Sabendo-se que o picolé do tipo 1 é vendido por R$ 0,50; o do tipo 2 por R$ 0,60 e o do tipo 3 por R$ 0,75. Faça um algoritmo em PHP que, para cada tipo de picolé selecionado, mostre a quantidade vendida e o total arrecadado. Utilize o comando "Switch".



Construa um algoritmo em PHP que leia um número inteiro de 1 a 7 e informe o dia da semana correspondente, sendo domingo o dia de número 1. Se o número não corresponder a um dia da semana, mostre uma mensagem de erro ("Digite um número entre 1 e 7").*/

	function picole($tipo){
		switch ($tipo) {
			case 1:
				$qtd = 5;
				$total = $qtd * 0.5;
				echo "Quantidade vendida: ".$qtd.", e total arrecadado: R$ ".number_format($total,2,",",".")."<br>";
				break;

			case 2:
				$qtd = 5;
				$total = $qtd * 0.6;
				echo "Quantidade vendida: ".$qtd.", e total arrecadado: R$ ".number_format($total,2,",",".");
				break;

			case 3:
				$qtd = 5;
				$total = $qtd * 0.75;
				echo "Quantidade vendida: ".$qtd.", e total arrecadado: R$ ".number_format($total,2,",",".");
				break;	
			default:
				echo "Valor Inválido";
				break;
		}
	}

	picole(1);

	function semana($dia){
		switch ($dia) {
			case 1:
				echo "Domingo.";
				break;
			case 2:
				echo "Segunda.";
				break;
			case 3:
				echo "Terça.";
				break;
			case 4:
				echo "Quarta.";
				break;
			case 5:
				echo "Quinta.";
				break;
			case 6:
				echo "Sexta.";
				break;
			case 7:
				echo "Sábado.";
				break;
				
			default:
				echo "Digite um número entre 1 e 7";
				break;
		}
	}

	semana(2);

?>
