<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$num = $_POST['num'];


	for ($i=$num; $i >= 1; $i--) { 
		$calculo = $num*$i;
		echo $calculo;
		echo "<br>";
	}
}

?>