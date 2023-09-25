<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$frase = $_POST['frase'];

	//remove espaços em branco e converta para letras minúsculas
	$frase = strtolower(str_replace(' ', '', $frase));

	//Inicialize uma variável para indicar se a frase é um palíndromo
	$palindromo = true;


	//Obtenha o comprimento da frase
	$comprimento = strlen($frase);


	//Use um loop para veriicar se a frase é um palíndromo
	for ($i=0; $i < $comprimento / 2; $i++) { 
		$caractereInicial $frase[$i];
		$caractereFinal = $frase[$comprimento - $i - 1];

			//compare os caracteres
			if ($caractereInicial != $caractereFim) {
				$palindromo false;
				break;
			}
	}

	//exiba o resultado
	if ($palindromo) {
		echo "A fras é um palíndromo.";
	} else {
		echo "A frase não é um palíndromo."
	}

}

?>