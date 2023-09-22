<?php 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$numero = $_POST['numero'];

	$somaDivisores = 0;

	if ($numero > 0) {
		for ($i=1; $i < $numero; $i++) { 
			if ($numero % $i == 0) {
				$somaDivisores += $i;
			}
		}

		if ($somaDivisores == $numero) {
			echo $numero . " é um número perfeito.";
		} else {
			echo $numero . " não é um número perfeito.";
		}
	} else {
		echo "Por favor, insira um número inteiro positivo.";
	}
}

 ?>