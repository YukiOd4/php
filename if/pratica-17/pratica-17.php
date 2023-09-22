<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$dia = $_POST['dia'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$mes = $_POST['mes'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$ano = $_POST['ano'];

	$anoBissexto = (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0));

	if ($ano >= 1 && $ano <= 2023 && $mes >= 1 && $mes <= 12) {
		if (($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) && ($dia >= 1 && $dia <= 31))  {
			 echo "A data é válida: Dia " . $dia . " do mês " . $mes . " de " . $ano;
		} elseif (($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) && $dia >= 1 && $dia <= 30) {
			echo "A data é válida: Dia " . $dia . " do mês " . $mes . " de " . $ano;
		} elseif ($mes == 2 && (($anoBissexto && $dia >= 1 && $dia <= 29) || (!$anoBissexto && $dia >= 1 && $dia <= 28))) {
			echo "A data é válida: Dia " . $dia . " do mês " . $mes . " de " . $ano;
		} else {
			 echo "A data é inválida."
		}
	} else {
		 echo "A data é inválida."
	}
	
}
}
}

?>