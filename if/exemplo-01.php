<?php 

$qualASuaIdade = 20;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualASuaIdade <= $idadeCrianca){

	echo "Criança";

}else if ($qualASuaIdade <= $idadeMaior) {
	
	echo "Adolecente";

}else if ($qualASuaIdade <= $idadeMelhor){

	echo "Adulto";

}else{

	echo "Idoso";
	
}

echo "<br>";

//um operador que nao foi citado na aula de operadores
echo ($qualASuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de Idade";

 ?>