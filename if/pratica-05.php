<?php

$a = 2;
$b = 5;
$c = 4;

if ($a > $b && $a > $c) {
	echo "O maior número é " . $a;
} else if ($b > $a && $b > $c) {
	echo "O maior número é " . $b;
} else {
	echo "O maior número é " . $c;
}

?>