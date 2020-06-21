<?php  
	/*QUESTÃO 01:
	Faça um algoritmo que calcule e mostre o resultado da multiplicação do número 8 com os números 1,5,8. Observação: Inserir quebra de linha após cada resultado;
	
		//DECLARAÇÃO DE VARIAVEIS
		$num1 = 1;
		$num2 = 2;
		$num3 = 8;
		$resultado = 0;

		//CÁCULO E IMPRESSÃO
		$resultado = $num1 * 8;
		echo "O resultado de 8 vezes 1 é ".$resultado."<br>";
		
		$resultado = $num2 * 8;
		echo "O resultado de 8 vezes 2 é ".$resultado."<br>";

		$resultado = $num3 * 8;
		echo "O resultado de 8 vezes 8 é ".$resultado."<br>";
*/
	/*QUESTÃO 02:
	Escreva um algoritmo para calcular e mostrar a área de um trapézio. Sabe-se que a área do trapézio é calculada pela fórmula: A = ((base maior + base menor) * altura) / 2.
	

	//DECLARAÇÃO DE VARIAVEIS
		$baseMaior = 15;
		$baseMenor = 10; 
		$altura = 20;
		$areaTrap = 0;
		
	//CÁCULO DA ÁREA DO TRAPÉZIO
		$areaTrap = ((($baseMaior + $baseMenor) * $altura) / 2);

	//IMPRESSÃO DA ÁREA DO TRAPÉZIO
		echo "A área do Trapézio é igual a ".$areaTrap."cm².";
*/

	/*QUESTÃO 03:
	Escreva um algoritmo para calcular e mostrar área de uma "pizza redonda" que possui um raio (r) de 3 cm. Sabe-se que a área do circulo é calculada pela fórmula: Área = pi * r², onde pi=3,14;

	//DECLARAÇÃO DE VARIAVEIS
		$r = 3;
		$pi = 3.14;
		$areaCirculo = 0;

	//CÁLCULO DA ÁREA DO CÍRCULO
		$areaCirculo = $pi * (pow($r,2));

	//IMPRESSÃO DA ÁREA DO CÍRCULO
		echo "A área da pizza é de ".$areaCirculo."cm².";
*/
		/*QUESTÃO 04:
		Sabendo que dois números inteiros (int1 e int2) possuem valores 14 e 5, respectivamente. Exiba o quociente e o resto da divisão de int1 por int2;

		//DECLARAÇÃO DE VARIAVEIS
			$int1 = 14;
			$int2 = 5;
			$quociente = 0;
			$resto = 0;

		//CÁLCULO DO QUOCIENTE E DO RESTO
			$quociente = $int1 / $int2;
			$resto = $int1 % $int2;

		//IMPRESSÃO DO QUOCIENTE E DO RESTO

			echo "O quociente da divisão é igual a ".$quociente.".<br>"."O resto da divisão é igual a ".$resto.".";
*/

		/*QUESTÃO 05:
		Considerando que uma fábrica de camisetas produz os tamanhos pequeno, médio e grande, cada uma sendo vendida respectivamente por 10, 12,50 e 15,20 reais. Construa um algoritmo para calcular e mostrar o valor arrecadado com uma venda de camisetas, sendo 8 pequenas, 11 médias e 3 grandes;

		//DECLARAÇÃO DE VARIÁVEIS
			$valPequena = 10;
			$valMedia = 12.50;
			$valGrande = 15.20;
			$pequenas = 8;
			$medias = 11;
			$grandes = 3;
			$valArre = 0;

		//CÁLCULO
			$valArre = (($pequenas * $valPequena) + ($medias + $valMedia) + ($grandes * $valGrande));

		//IMPRESSÃO DO TOTAL ARRECADADO

			echo "O total arrecadado com a venda foi de R$ ".number_format($valArre,2,',','.').".";

			*/

	/*Escreva um algoritmo para calcular e mostrar o antecessor do número 26;
	
	//DECLARAÇÃO DE VARIAVEIS
		$num = 26;
		$antecessor = 0;

	//CÁCULO DE ANTECESSOR
		$antecessor = $num - 1;

	//IMPRESSÃO DE ANTECESSOR
		echo "O antecessor do número 26 é ".$antecessor.".";
		*/
	/*QUESTÃO 07:
	Escreva um algoritmo para calcular e mostrar O preço total de um automóvel, sabendo que valor total do veículo é calculado pela soma do preço de fábrica (R$ 18.000, 00) com o preço dos impostos (45% do preço de fábrica) e a percentagem do revendedor (28% do preço de fábrica);

	//DECLARAÇÃO DE VARIÁVEIS
		$precoFab = 18000;
		$impostos = 0.45;
		$perRevende = 0.28;
		$total = 0;

	//CÁCULO DO PREÇO DO AUTOMÓVEL
		$total = (($precoFab * $impostos) + ($precoFab * $perRevende) + $precoFab);

	//IMPRESSÃO DO TOTAL DO AUTOMÓVEL
		echo "O preço total do automóvel é de R$ ".number_format($total,2,',','.').".";
*/

	/*QUESTÃO 08:
	Escreva um algoritmo para calcular e mostrar o resultado das quatros operações matemáticas básicas (adição, subtração, multiplicação e divisão), para cada operação utilize as variáveis A e B. OBS. Incluir quebra de linha após cada resultado exibido;

	//DECLARAÇÃO DE VARIAVEIS
		$A = 4;
		$B = 2;
		$resultado = 0;

	//CÁLCULO E IMPRESSÃO DE RESULTADOS
		//SOMA
		$resultado = $A + $B;
		echo "Soma = ".$resultado.".<br>";

		//SUBTRAÇÃO
		$resultado = $A - $B;
		echo "Subtração = ".$resultado.".<br>";

		//MULTIPLICAÇÃO
		$resultado = $A * $B;
		echo "Multiplicação = ".$resultado.".<br>";

		//DIVISÃO
		$resultado = $A / $B;
		echo "Divisão = ".$resultado.".";*/

		function calculo($operador){
			$A = 4;
			$B = 2;
			$resultado = 0;
			if($operador == "+"){
				$resultado = $A + $B;
				echo "Soma = ".$resultado.".<br>";
			}elseif ($operador == "-") {
				$resultado = $A - $B;
				echo "Subtração = ".$resultado.".<br>";
			}elseif ($operador == "*") {
				$resultado = $A * $B;
				echo "Multiplicação = ".$resultado.".<br>";
			}elseif ($operador == "/") {
				$resultado = $A / $B;
				echo "Divisão = ".$resultado.".";
			}
		}
		
		calculo("+");
		calculo("-");
		calculo("*");
		calculo("/");

	/*QUESTÃO 09:
	Automatize o trava língua "A vaca malhada foi molhada por outra vaca molhada e malhada.", de modo que uma variável, criada por você, possa substituir uma ou mais palavras do texto e em seguida exiba o resultado utilizando as variáveis criadas. OBS. Utilize a letra "'p' + número" para criar o nome da variável, exemplo p1,p2,p3,p4,p5,p6,p7, ... , pN.

	//DECLARAÇÃO DE VARIAVEIS
		

		function trava($p1,$p2,$p3){
			 echo "A $p2 $p1 foi $p3 por outra vaca molhada e malhada";
		}

		trava("leite","bezerra","biscoito");
*/
	/*QUESTÃO 10:
	Escreva um algoritmo para calcular e mostrar o valor de total de divida do cliente, sabendo que está 4 prestações atrasadas e o valor de cada prestação é R$ 56,70 com taxa de 6% por prestação. Utilize a fórmula: DIVIDA = PRESTAÇÃO + (PRESTAÇÃO * (TAXA / 100) * TEMPO).
	// DECLARAÇÃO DE VARIAVEIS
		$prestacao = 56.70;
		$taxa = 6;
		$tempo = 4;
		$divida = 0;

	//CÁLCULO DA DÍVIDA
		$divida = $prestacao + ($prestacao * (($taxa/100) * $tempo));

	//IMPRESSÃO DO TOTAL DA DÍVIDA
		echo "O valor total da dívida é de R$ ".number_format($divida,2,",",".").".";
		*/
?>