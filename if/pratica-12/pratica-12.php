<?php

if ($_SERVER['REQUEST_METHOD'] = "POST") {
	$num = $_POST['num'];

	if ($num >= 0 && is_numeric($num) && floor($num) == $num) {
		$total = 1;
	

		for ($i=$num; $i >= 1; $i--) { 

		$total *= $i; 

		}

		echo "O fatorial de " . $num . " é " . $total;

	} else {
		echo "Por favor, insira um número inteiro não negativo.";
	}
}

?>