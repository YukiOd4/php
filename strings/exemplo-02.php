<?php

$nome = "joao rangel";

$nome = strtoupper($nome);//transformou o str da variavel de letra minuscula para letra maiusculo

echo $nome;

$nome = strtolower($nome);

echo "<br>";

echo ucwords($nome);//ucwords muda de maiusculo para maiusculo em todos inicio de palavras.

echo ucfirst($nome);//somente a primeira letra da frase se torna maiusculo

?>