<?php  

$resultado = 10 + 3 / 2;
$resultado2 = (10 + 3) / 2;
$resultado3 = (10 + 3) / 2 > 5 && 10 + 5 < 3; // mesma coisa que $resultado3 = (10 + 3) / 2 > 5 || 10 + 5 < 3;

echo $resultado;

echo "<br>";

echo $resultado2;

echo "<br>";

echo $resultado3;

?>