<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$palavra = $_POST['palavra'];


	$contagemVogal = 0;

	$palavra = strtolower($palavra);


	for ($i=0; $i < strlen($palavra); $i++) { 
		$caractere = $palavra[$i];

		if ($caractere === 'a' || $caractere == 'e' || $caractere == 'i' || $caractere == 'o' || $caractere == 'u') {
			$contagemVogal++;
		}
	}

	echo "Número de vogais na palavra/frase: " . $contagemVogal;

}

?>