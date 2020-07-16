<?php
# FUNÇÃO DE INSERÇÃO DE ARQUIVOS EXTERNOS
// //incluindo o arquivo 'includeConfig.php' no arquivo 'execSystem.php'
// include("includeConfig.php");

// //Após a execução do arquivo 'execSystem.php' o resultado é
// //Aqui outro arquivo PHP (includeConfig)

include("includeConfig.php");

$novaMsg = "<br>Aqui uma msg do arquivo 'execSystem.php', sendo que podemos incluir a outra mensagem: $msg";

echo $novaMsg;
?>