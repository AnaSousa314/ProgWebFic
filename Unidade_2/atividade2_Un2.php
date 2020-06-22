<?php  
/*QUESTÃO 01:
	Escreva um algoritmo em PHP para receber um nº inteiro e mostre uma mensagem indicando se este número é par ou ímpar, e se é positivo ou negativo. Dica: utilize o operador % (resto da divisão inteira). Utilize a estrutura de decisão if ... else

	function numero($num){
		if ($num >= 0) {
			echo "O número $num é positivo.<br>";
		}elseif ($num < 0) {
			echo "O número $num é negativo.<br>";
		}
		if ($num % 2 == 0) {
			echo "O número $num é par.<br><br>";
		}else{
			echo "O número $num é ímpar.<br><br>";
		}

	}
numero(2);
numero(-5);
*/

/*
QUESTÃO 02:
Suponha que o conceito de um aluno seja determinado em função da sua nota. Suponha, também, que esta nota seja um valor inteiro na faixa de 0 a 100, conforme a faixa (nota e conceito, respectivamente): 0 a 49 INSUFICIENTE; 50 a 64 REGULAR; 65 a 84 BOM; 85 a 100 ÓTIMO. Escreva um algoritmo em PHP que apresente o conceito e a nota do aluno. Utilize a estrutura de decisão "if ... else".

	function aluno($nota){
		if (($nota >= 0) && ($nota <= 49)) {
			echo "INSUFICIENTE<br>";
		}elseif (($nota>=50)&&($nota<=64)) {
			echo "REGULAR<br>";
		}elseif (($nota>=65)&&($nota<=84)) {
			echo "BOM<br>";
		}elseif (($nota>=85)&&($nota<=100)) {
			echo "ÓTIMO<br>";
		}
	}

	aluno(0);
	aluno(52);
	aluno(84);
	aluno(90);
	*/

/*QUESTÃO 03:
	Escreva um algoritmo em PHP para receber a altura (h) e o sexo de uma pessoa (m - masculino e f - feminino), em seguida calcule seu peso ideal, utilizando as seguintes fórmulas: para homens: (72.7*h)-58 e para mulheres: (62.1*h)-44.7. Utilize a estrutura de decisão if ... else.

	function ideal($h,$sexo){
		if ($sexo == 'm') {
			$pesoIdeal = ((72.7*$h) - 58);
			echo "Seu peso ideal é ". number_format($pesoIdeal,2,",","."). " quilos.<br>"; 
		}elseif ($sexo == 'f') {
			$pesoIdeal = ((62.1*$h) - 44.7);
			echo "Seu peso ideal é ". number_format($pesoIdeal,2,",","."). " quilos.<br>";
		}
	}

	ideal(1.65,'f');
	ideal(1.65,'m');
	*/

/*QUESTÃO 04:
	Escreva um algoritmo em PHP para receber o valor total gasto pelo cliente de uma loja e a forma de pagamento conforme o números de parcelas (descrito abaixo). Em seguida, exibir o número de parcelas e o valor total pago por parcela (considerar pagamento a vista como uma parcela).

1) Opção: a vista com 10% de desconto

2) Opção: em duas vezes (preço da etiqueta)

3) Opção: de 3 até 5 vezes com 3% de juros ao mês para compras até R$ 100,00 e %5 de juros para compras acima de R$ 100,00.

OBS.: Utilize o comando "Switch".

	function pagamento($opcao){
		switch ($opcao) {
			case 1:
				$total = 100;
				$totalPago = $total-($total*(10/100));
				echo "Total da parcela R$ ".number_format($totalPago,2,",",".").". Pago á vista."."<br>";
				break;
			case 2:
				$formapgt = 2;
				$total = 60;
				$totalPago = $total/$formapgt;
				echo "O número de parcela foi $formapgt.<br>"."O total pago por parcela foi ".number_format($totalPago,2,",",".");
				break;
			case 3:
				$total = 200;
				$formapgt = 4;
		
					if ($total<=100) {
						$parcela = $total/$formapgt;
						$totalPago = ($parcela*(3/100))+$parcela;

						echo "Total pago por parcela R$ ".$totalPago.". E número de parcelas ".$formapgt;
					}elseif ($total>100) {
						$parcela = $total/$formapgt;
						$totalPago = ($parcela*(5/100))+$parcela;

						echo "Total pago por parcela R$ ".$totalPago.". E número de parcelas ".$formapgt;
					}
				
				break;
			default:
				echo "Opção Inválida";
				break;
		}
	}

pagamento(3);
*/
/*QUESTÃO 05:
	Escreva um algoritmo em PHP para receber quatro valores: n, a, b, c. Mostre o resultado conforme a regra abaixo. Utilize o comando "Switch".

i. Se n = 1 imprimir os valores a, b, c.

ii. Se n = 2 imprimir os valores b e c.

iii. Se n = 3 imprimir os valores a.

OBS.: Caso n <= 0 ou n > 3, exibir a mensagem: "Valor Incorreto, digite os valores de 1 a 3 para 'n'";

	function quatro($n,$a,$b,$c){
		switch ($n) {
			case 1:
				echo "Valor a=$a.<br>Valor b=$b.<br>Valor c=$c.<br>";
				break;
			case 2:
				echo "Valor b=$b e c=$c.<br>";
				break;
			case 3:
				echo "Valor a=$a.<br>";
				break;
			
			default:
				if (($n<=0)||($n>3)) {
					echo "Valor Incorreto, digite os valores de 1 a 3 para 'n'";
				}
				break;
		}
	}
	quatro(1,1,2,3);*/

/*QUESTÃO 06:
	Uma empresa quer verificar se um empregado está qualificado para a aposentadoria ou não. Para estar em condições, um dos seguintes requisitos deve ser satisfeito:

- Ter no mínimo 65 anos de idade.

- Ter trabalhado no mínimo 30 anos.

- Ter no mínimo 60 anos e ter trabalhado no mínimo 25 anos.

Com base nas informações acima, escreva um algoritmo em PHP para receber os valores: ano de seu nascimento e ano de seu ingresso na empresa. O programa deverá escrever a idade e o tempo de trabalho do empregado e a mensagem 'Requerer aposentadoria' ou 'Não requerer'. Utilize a estrutura de decisão if ... else.

	function aposenta($anoNasc,$ingresso){
		$ano = 2020;
		$tempoEmp = $ano-$ingresso;
		$idade = $ano - $anoNasc;

		if (($idade>=65)||($tempoEmp>=30)||(($idade>=60)&&($tempoEmp>=25))) {
			echo "Idade: $idade.<br>Tempo de Trabalho: $tempoEmp.<br>"."Requerer aposentadoria.";
		}else{

			echo "Idade: $idade.<br>Tempo de Trabalho: $tempoEmp.<br>"."Não requerer.";
		}
	}

aposenta(1960,1978);
*/
/*QUESTÃO 07:
Escreva um algoritmo em PHP para receber a idade de um nadador. Considerando a sua idade, exiba a categoria ele se encaixa (OBS.: Utilize o comando "Switch"). Categorias: 

infantil A = 5 - 7 anos

infantil B = 8 - 10 anos

juvenil A = 11 - 13 anos

juvenil B = 14 - 17 anos

adulto = maiores de 18 anos

function categoria($idade){
	switch ($idade) {
		case 5:
		case 6:
		case 7:
			echo "Infantil A";
			break;
		case 8:
		case 9:
		case 10:
			echo "Infantil B";
			break;
		case 11:
		case 12:
		case 13:
			echo "Juvenil A";
			break;
		case 14:
		case 15:
		case 16:
			echo "Juvenil B";
			break;
		default:
			if ($idade>18) {
				echo "Adulto";
			}
			break;
	}
}
categoria(6);
*/
/*QUESTÃO 08:
	Faça um algoritmo em PHP para receber os valores de A, B e C. Mostre uma mensagem que informe se a soma de A com B é menor, maior ou igual a C. Utilize a estrutura de decisão if ... else.
	function menorMaiorIgual($A,$B,$C){
		$soma = $A + $B;
		if ($soma>$C) {
			echo "A soma de A com B é MAIOR que C.";
		}elseif ($soma<$C) {
			echo "A soma de A com B é MENOR que C.";
		}elseif ($soma==$C) {
			echo "A soma de A com B é IGUAL a C.";
		}
	}

	menorMaiorIgual(10,10,20);
	*/

/*QUESTÃO 09:
	Utilizando o comando "Switch", escreva um algoritmo em PHP para receber 2 números e a operação matemática que deseja realizar: + (adição), - (subtração), * (multiplicação) e / (divisão). Observação: Caso a operação matemática escolhida seja a divisão, certifique-se que o maior número será o dividendo e o menor o divisor (para tal use a estrutura de decisão "if ... else"). No final, exiba a operação selecionada e o valor do cálculo realizado.

	function calc($num1,$num2,$operador){
		switch ($operador) {
			case '+':
				$res=$num1+$num2;
				echo "O resultado é igual a $res";
				break;
			case '-':
				$res=$num1-$num2;
				echo "O resultado é igual a $res";
				break;
			case '*':
				$res=$num1*$num2;
				echo "O resultado é igual a $res";
				break;
			case '/':
				if ($num1<$num2) {
					$res=$num2/$num1;
				echo "O resultado é igual a $res";
				}elseif ($num1>=$num2) {
					$res=$num1/$num2;
				echo "O resultado é igual a $res";
				}
				break;
			default:
				echo "Operação Inválida";
				break;
		}
	}

	calc(1,4,'/');
	*/

/*QUESTÃO 10:
Escreva um algoritmo em PHP para receber uma letra e exibir se é consoante ou vogal. Utilize o comando "Switch".*/
 function vc($letra){
 	$op = 0;
 	if(($letra=='a')||($letra=='e')||($letra=='i')||($letra=='o')||($letra=='u')){
 		$op = 1;
 	}elseif (($letra=='b')|| ($letra=='c')|| ($letra== 'd')|| ($letra=='f') || ($letra=='g') || ($letra=='h')|| ($letra== 'j') || ($letra=='k')|| ($letra=='l')|| ($letra== 'm') || ($letra=='n') || ($letra=='p') || ($letra=='q') || ($letra=='r')|| ($letra== 's')|| ($letra=='t')|| ($letra=='v')|| ($letra=='w')|| ($letra=='x') || ($letra=='y') || ($letra=='z')) {
 		$op=2;
 	}

 	switch ($op) {
 		case 1:
 			echo "Vogal";
 			break;
 		case 2:
 			echo "Consoante";
 			break;
 		default:
 			# code...
 			break;
 	}

 }
 vc('e');
?>