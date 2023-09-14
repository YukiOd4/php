<?php  

$salario = 1500;
$salarioMinimo = 1200;

if($salario <= $salarioMinimo){
	echo "Você recebe um salario Mínimo de ".$salario;
}else{
	echo "Você recebe mais que um salario Mínimo, recebe ".$salario;
}

echo "<br>";

$diaPagamento = 5;
$bonificação == false;

if ($diaPagamento <= 5) {
	echo "Recebe nos 5 dias úteis";
}elseif ($diaPagamento > 5 && $diaPagamento <= 15) {
	echo "Recebe Quinzenal";
}elseif ($bonificação === true) {
	$valorBonificação = 400;
	echo "Você recebe bonificação dia 20 de".$valorBonificação;
}else{
	echo "Não recebe bonificação";
}

$total = $salario + $valorBonificação

	echo "<br>";

	echo "Valor total de ".$total;

?>