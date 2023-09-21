<?php

$valor = 100;

if ($valor >= 100) {
	$desconto = 10 * $valor / 100;
	$valorDesconto = $valor - $desconto;
	echo "Preço com desconto: " . $valorDesconto;
}else{
	$desconto = 5 * $valor / 100;
	$valorDesconto = $valor - $desconto;
	echo "Preço com desconto: " . $valorDesconto;
}

?>