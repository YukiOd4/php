//variáveis pré definidas ou chamadas de SuperGlobais
<?php 

$nome = $_GET["a"]; /* vai apresentar uma resposta de null pois o "a" não está com nenhum dado, agora na URL do seu site insira no final "?a=123" sem as aspas que vai diretamente dizer o valor do dado que GET está puxando */

var_dump($nome);

exit;

/* o GET é uma variável do tipo string ou caractere e caso precisa conversar esse tipo para outro defina o tipo dela antes do GET
$nome = (int)$_GET["a"];*/

/*vamos supor que precisa de outro dado e vai mudar novamente a URL do site adicionando! "a=123&b=456" sem aspas */

//como pegar o IP do usuário
$ip = $_SERVER["remote_ADDR"];
echo $ip;

//Como saber a pasta que está acessando
$log = &_SERVER["SCRIPT_NAME"];
echo $log;