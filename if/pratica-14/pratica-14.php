<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$real = $_POST['valor'];

	$realD = $real * 5.00;
	echo $realD;

}

?>