<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$ano = $_POST["ano"];
}

	if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
		echo "O ano " . $ano . " é bissexto.";
	} else {
		echo "O ano " . $ano . " não é bissexto.";
	}

?>