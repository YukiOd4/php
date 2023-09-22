<?php

$numero = 5;
$primo = true;

if ($numero <= 1) {
	$primo = false;
} else{
	for ($i=2; $i < sqrt($numero); $i++) { 
		if ($numero % $i == 0) {
			$primo = false;
			break;
		}
	}
}

if ($primo) {
	echo $numero . " é um número primo.";
} else {
	echo $numero . " não é um número primo.";
}

?>