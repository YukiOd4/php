<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$peso = $_POST["peso"];
}

	if ($peso <= 1) {
		$valor = 5.00;
		echo "Custo de envio: R$" . $valor . ".";
	} else {
		$valor = 5.00 + ($peso - 1) * 2.00;
		echo "Custo de envio: R$" . $valor . ".";
	}

?>