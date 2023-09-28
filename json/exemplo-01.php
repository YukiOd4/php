<?php
//array bi-dimensional
$pessoas = array();

array_push($pessoas, array(
	'nome'=>'Yuki',
	'idade'=>'20'
));

array_push($pessoas, array(
	'nome'=>'Yudi',
	'idade'=>'19'
));

echo json_encode($pessoas);

?>