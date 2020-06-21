<?php 
	/*10) Preencher os campos destacados no texto abaixo, utilizando variáveis ao invés de incluir a resposta (texto) diretamente. No final, exiba o resultado.

"Belém/PA, 08 de <<preencher com variável >> de 2020.

<<preencher com variável - quebra de linha>>

Avisamos aos alunos que as aulas devem iniciar no próximo dia 08 de <<preencher com variável>> (segunda-feira). Ao longo desta semana, serão enviados e-mails aos alunos com instruções para os próximos passos do curso. Quem não receber essa mensagem até o dia 22 de <<preencher com variável>> (quarta-feira), por favor entrar em contato conosco, por meio do endereço eletrônico <<preencher com variável>>. 

<<preencher com variável - quebra de linha>>

<<preencher com variável - quebra de linha>>

Atenciosamente,

<<preencher com variável - quebra de linha>>

Kleverton <<preencher com variável>>".*/

//Forma que o professor fez:

$mes = 'junho';
$email = "kleverton.cordovil@ifpa.edu.br";
$sobrenome = "Cordovil";
$quebra = "<br>";
$texto = "";

//Texto

$texto = "Belém/PA, 08 de {$mes} de 2020.{$quebra}Avisamos aos alunos que as aulas devem iniciar no próximo dia 08 de {$mes} (segunda-feira). Ao longo desta semana, serão enviados e-mails aos alunos com instruções para os próximos passos do curso. Quem não receber essa mensagem até o dia 22 de {$mes} (quarta-feira), por favor entrar em contato conosco, por meio do endereço eletrônico {$email}.{$quebra}{$quebra}Atenciosamente,{$quebra}Kleverton{$sobrenome}";

	echo $texto;
 ?>



<!--
	Forma que eu fiz: 
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 


$mes = "junho";
$quebra = '<br>';
$ema = "kleverton.cordovil@ifpa.edu.br";
$sobrenome = "Cordovil";
 ?>

 <p>Belém/PA, 08 de junho de 2020<?php echo $quebra;?>
 	Avisamos aos alunos que as aulas devem iniciar no próximo dia 08 de <?php echo$mes;?> (segunda-feira). Ao longo desta semana, serão enviados e-mails aos alunos com instruções para os próximos passos do curso. Quem não receber essa mensagem até o dia 22 de <?php echo$mes;?> (quarta-feira), por favor entrar em contato conosco, por meio do endereço eletrônico <?php echo $ema.".".$quebra.$quebra ;?>
 	Atenciosamente,<?php echo$quebra;?>
 	Kleverton <?php echo$sobrenome;?>
 </p>
 	
 
</body>
</html>
-->


