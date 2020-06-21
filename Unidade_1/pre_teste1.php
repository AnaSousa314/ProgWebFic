<?php 
	/*QUESTÃO 01:

	Escreva um algoritmo para calcular e mostrar uma temperatura recebida em graus Celsius e apresente-a convertida em graus Fahrenheit. A fórmula de conversão é: F = (9 * C + 160) / 5, na qual F é a temperatura em Fahrenheit e C é a temperatura em Celsius; 
	//DECLARAÇÃO DAS VARIAVEIS
	$C = 40;
	$F = 0;

	//CONVERSÃO DA TEMPERATURA
	$F = (9 * $C + 160) / 5;

	//IMPRESSÃO DO RESULTADO DA CONVERSÃO
	echo "A temperatura em Fahrenheit é ".$F."°F.";
	*/

	/*QUESTÃO 02:
	Tendo como dados de entrada a altura (metros) e o peso (quilos) de uma pessoa, construa um algoritmo que calcule seu IMC (Índice de Massa Corporal), utilizando a seguinte fórmula: IMC = Peso / Altura² . Exiba o resultado;
	//DECLARAÇÃO DE VARIAVEIS
	$altura = 1.65;
	$peso = 60;
	$imc = 0;

	//CÁLCULO DO IMC(ÍNDICE DE MASSA CORPORAL)
	$imc = $peso / (pow($altura, 2));

	//IMPRESSÃO DO RESULTADO
	echo "O seu Índice de Massa Corporal é de ".number_format($imc,2);*/

	/*QUESTÃO 03:

	Escreva um algoritmo para calcular e mostrar a média (aritmética) final de um aluno, sabendo que este aluno possui 3 notas (media final = (nota 1 + nota 2 + nota 3) / 3). OBS.: Não utilizar valores inteiros.
	//DECLARAÇÃO DE VARIAVEIS
	$nota1 = 9.5;
	$nota2 = 6.8;
	$nota3 = 8.6;
	$mediaFinal = 0;

	//CALCULO DA MÉDIA FINAL
	$mediaFinal = ($nota1 + $nota2 + $nota3) / 3;

	//IMPRESSÃO DO RESULTADO DA MÉDIA FINAL 
	echo "A média (aritmética) final do aluno foi de ".$mediaFinal." pontos.";*/

	/*QUESTÃO 4:

	Escreva um algoritmo para calcular e mostrar uma temperatura recebida em Fahrenheit e a apresente convertida em graus Celsius. A fórmula de conversão é C = (F – 32) * ( 5 / 9), na qual F é a temperatura em Fahrenheit e C é a temperatura em Celcius;
	//DECLARAÇÃO DE VARIAVEIS
	$F = 104;
	$C = 0;

	//CONVERSÃO DA TEMPERATURA
	$C = ($F - 32) * (5 / 9);

	//IMPRESSÃO DO RESULTADO DA CONVERSÃO
	echo "A temperatura em graus Celsius é de ".$C."°C.";*/

	/* QUESTÃO 5:
	Escreva um algoritmo que possua as variáveis A e B (no mínimo) e efetue a troca dos seus valores de forma que a variável A passe a possuir o valor da variável B e a variável B passe a possuir o valor da variável A. Apresente os valores trocados;

	//DECLARAÇÃO DE VARIAVEIS
	$A = 10;
	$B = 5;
	$C = 0;

	//IMPRESSÃO DE A E B ANTES DA TROCA

	echo "Antes de fazer a troca A vale ". $A." e B vale ".$B."."."<br><br>";

	//TROCA DE VALORES
	$C = $B;
	$B = $A;
	$A = $C;

	//IMPRESSÃO DOS VALORES TROCADOS
	echo "Depois da troca A vale ".$A." e B vale ".$B.".";*/

	/*QUESTÃO 6:
	Escreva um algoritmo para calcular e mostrar o quociente e o resto da operação: "10 dividido por 3".
	//DECLARAÇÃO DE VARIAVEIS
	$dividendo = 10;
	$divisor = 3;
	$quociente = 0;
	$resto  = 0;

	//CÁCULO DA DIVISÃO
	$quociente = $dividendo / $divisor;
	$resto = $dividendo % $divisor;

	//IMPRESSÃO DO RESULTADO
	echo "O quociente é de ".$quociente."."."<br>"."O resto é de ".$resto.".";*/

	/*QUESTÃO 7:
	Escreva um algoritmo para calcular e mostrar os resultados do quadrado (num²) e do cubo (num³) de um valor inteiro;

	//DECLARAÇÃO DE VARIAVEIS
	$num = 3;
	$quadrado = 0;
	$cubo = 0;

	//CÁCULO  
	$quadrado =pow($num,2);
	$cubo = $num ** 3;

	//IMPRESSÃO
	echo "O quadrado do número 3 é ".$quadrado.". "."E o cubo é ".$cubo.".";*/

	/*QUESTÃO 8:
	Escreva um algoritmo para calcular e mostrar quantos dias se passaram do início do ano de 2020 até 09/06/2020. Considere sempre que um mês possui 30 dias;

	//DECLARAÇÃO DE VARIAVEIS
	$diasMes = 30;
	$mesesPassados = 5;
	$diasPassados = 0;

	//CÁLCULO DE DIAS PASSADOS
	$diasPassados = ($mesesPassados * 30) + 9;

	//IMPRESSÃO 
	echo "O total de dias passados desde o inicio do ano foi de ".$diasPassados." dias.";
*/

	/*QUESTÃO 9:
	Escreva um algoritmo para calcular e mostrar o novo salário mensal de um funcionário a partir do salário atual e do percentual de reajuste informado por você.*/

	//DECLARAÇÃO DE VARIAVEIS
	$salarioAtual = 1000;
	$percentReajuste = 0.05;
	$novoSalario = 0;

	//CÁLCULO DO NOVO SALÁRIO
	$novoSalario = $salarioAtual + ($salarioAtual*$percentReajuste);

	//IMPRESSÃO DO NO SALÁRIO
	echo "O novo salário mensal é de R$ ".number_format($novoSalario,2);

	/*QUESTÃO 10:
	Um restaurante a quilo cobra R$11,59 por cada quilo de refeição. Escreva um algoritmo que calcule e exiba o preço total que o cliente vai ter que pagar, sendo o peso do prato montado por ele (em quilos) foi de 0,850Kg. Assuma que a balança já desconte o peso do prato;
	//DECLARAÇÃO DE VARIAVEIS
	$precoQuilo = 11.59;
	$pesoPrato = 0.850;
	$precoTotal = 0;

	//CÁLCULO DO TOTAL A PAGAR
	$precoTotal = $precoQuilo * $pesoPrato;

	//IMPRESSÃO DO TOTAL A PAGAR
	echo "O total foi de R$ ". number_format($precoTotal,2).".";
*/

 ?>