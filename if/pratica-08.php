<?php

$palavra = 'abelha';

$identifica = strtolower(substr($palavra, 0, 1));

if ($identifica == 'a' || $identifica == 'e' || $identifica == 'i' || $identifica == 'o' || $identifica == 'u') {
	echo "A palavra " . $palavra . ", é uma vogal!";
} else {
	echo "A palavra " . $palavra . ", é uma consoante!";
}

?>