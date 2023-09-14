<?php

for ($i=0; $i <= 10; $i++) { 
	echo $i."<br>";
}

for ($a=0; $a <= 1000; $a+=5){

	if ($a > 200 && $a < 950) continue;

	if ($a === 980) break;

	echo $a."<br>";
}

?>