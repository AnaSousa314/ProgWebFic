<?php
	$A = 10;
	$B = 5;
	$C = 15;

	$calc = 0;

	# a) (A + B) * C = 225
	$calc = ($A + $B) * $C;
	echo "Resposta a) ".$calc.'<br>';
	#echo '<br>';
	
	# b) (A * B) / 2 = 25
	$calc = ($A * $B) / 2;
	echo $calc;
	echo '<br>';

	# c) (A * (64 - B / C)) ~= 636,66
	$calc = ($A * (64 - $B / $C));
	echo $calc;


?>