<?php 
/*
$pessoas = array();

array_push($pessoas, array('nome'=>'joao','idade'=>20));
array_push($pessoas, array('nome'=>'glaucio','idade'=>25));

echo json_encode($pessoas);// transforma array em json
*/

$json= '[{"nome":"joao","idade":20},{"nome":"glaucio","idade":25}]';

$data = json_decode($json, true);// tem o json formatado e ele volta pra array

var_dump($data);

 ?>