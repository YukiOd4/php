<?php 

//As variáveis é recomendado se usar abreviações de palavra e palavras extensas com a 

//Para deletar uma variável:
$nome1 = 'João';
echo $nome1 ;//aqui é echo da variável
unset $nome1; //aqui está deletando a variável $nome1
//se desejar realizar uma verificação da variável realize um:

If (isset($nome1)){
echo $nome1
}else{
	$nome1 = "Pedro";
	echo $nome1;
	};