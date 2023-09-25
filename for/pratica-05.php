<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$limite = $_POST['limite'];

$num1 = 1;
$num2 = 0;

	for ($i=0; $i < $limite ; $i++) { 
		echo $num2;

		//Verifique se não é o último termo antes de imprimir a vírgula
		if ($i < $limite - 1) {
			echo ", ";
		}

	$proximo = $num2 + $num1;
	$num2 = $num1;
	$num1 = $proximo;
	}
}
?>