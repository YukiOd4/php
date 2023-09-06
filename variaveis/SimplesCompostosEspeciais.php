<?php 

//Tipos de Variáveis, Números não vão aspas pois se não se tornam textos{
//Variáveis Simples
$nome = 'Hcode'; //string
$site = 'www.google.com.br';
$ano = 2003
$salario = 5500.99
$bloqueado = false;

//Variáveis compostos {

//Variável Array
$frutas = array("Abacaxi, Laranja, Manga");


//exemplo de saída de dados array
echo $frutas[2]; //onde inicia 0, 1 e 2 = Abacaxi, Lara...

//Variável New{
$nascimento = new DateTime() //caixa () vazia vai puxar o horário atual.

//Variáveis especiais{
//Variável resources{
$arquivo = fopen("index.php", "r");
//Variável null //null é a ausência de valor, nulo é iniciado seu dado{
$vazio = null;

?>