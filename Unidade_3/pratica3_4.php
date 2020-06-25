<?php
/** Exemplo do comando "Continue";

Exibir os números de 1 a 10. OBS: não deve ser exibido números cuja a divisão por 3 seja exxata, ou seja, sem resto

*/

//for (inicialização; condição; incremento){}
//enquanto a condição for verdadeira, bloco continuára sendo executado
for ($i=1; $i <=10; $i++) {//enquanto $i for menor ou igual a 10, $i será somado +1
	if ($i % 3 == 0) {//aqui verifica se o número ($i) divido por 3 possui resto ou não
	//caso a condição seja verdadeira, o restante do código (a partir daqui) não será executado para este loop
	//ou seja, a linha de código (echo"$i ";) não será executada e nem as demais (caso existissem), porém $i será somado com +1
	// e o programa volta a analisar a linha 11 desde que a condição ($i<=10) continue verdadeira 
		//echo "Olá<br>";
	continue; 
	 	
	 } 
	echo "$i ";//saida exibida
}


?>