<?php

$ano = 2000;
$bissexto = 366;
$normal = 365;

if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
	echo "O ano atual é bissexto, com " . $bissexto . " dias!";
} else {
	echo "O ano atual não é bissexto, com " . $normal . " dias!";
}

?>