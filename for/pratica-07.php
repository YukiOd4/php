<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$limite = $_POST['limite'];

$num1 = 1;
$num2 = 0;

	for ($i=0; $i < $limite ; $i++) { 
		
		$n = $n[$i];
		echo "O enésimo número é:" . $num2;

	$proximo = $num2 + $num1;
	$num2 = $num1;
	$num1 = $proximo;
	}
}
?>