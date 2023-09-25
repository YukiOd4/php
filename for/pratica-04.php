<?php

for ($i=2; $i <= 100 ; $i++) { 
	$primo = true;

	//Verifique se o número é divisível por qualquer número entre 2 e a raiz quadradada do número
	for ($divisor=2; $divisor <= sqrt($i); $i++) { 
		if ($i % $divisor == 0) {
			$primo = false;
			break; //Se encontrarmos um divisor, não é primo
		}
	}

	//Se o número for primo, imprima-o
	if ($primo) {
		echo $i . "";
	}
}
?>