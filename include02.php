<?php 

//include "include.php"; //incluir os dados de um arquivo ../ sobe um diretorio

require_once "include.php";// obriga que o arquivo exista , e que esteja funcionando ja o include ele funciona mesmo com erro.
require_once "include.php"; // once ignora se o arquivo ja estiver no sistema

$resultado = somar(10, 25);

echo $resultado;












?>