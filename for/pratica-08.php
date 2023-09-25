<?php

if ($_SERVER['REQUEST_METHOD'] == 0) {
	$num = $_POST['num'];
}

$quantia = 100;

echo "Todos divisores encontrados do número informado até limite de 100:";

for ($i=1; $i <= $quantia; $i++) { 
	if ($i % $num == 0) {
		echo $i;
		echo "<br>";
	}
}

?>