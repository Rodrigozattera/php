<?php

/* aula 1 variaveis.

 $nome = "Hcode";

echo $nome;

var_dump($nome);

$anoNascimento = 2001;
$nomeCompleto = "Rodrigo zattera";


*/

/*

$nome1 = "rodrigo";
$sobrenome = "zattera";


$nomeCompleto = $nome1." ".$sobrenome; // o . concatena


echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1); //tirar a variavel da memoria

if(isset($nome1)){ // isset = se ela exite

	echo $nome1;
}

*/

//tipos de dados

//basicos
/*

$nome = "Hcode"; //string

$site = 'www.hcode.com.br'; //

$ano = 1990; //inteiro

$salario = 5500.99; //float

$bloqueado = false; //boleano

// compostos

$frutas = array("abacaxi", "laranja","manga"); //vetor/array

//echo $frutas[2];

$nascimento = new DateTime(); //objeto

//var_dump($nascimento);

//tipos especiais

$arquivo = fopen("variavel.php", "r");

var_dump($arquivo);

$nulo = NULL; //ela n existe NULL

$vazio = "";// existe e esta esperando alguma informacao.

*/

//$nome = (int)$_GET["a"]; //http://localhost/Variaveis.php?a=123445.

//var_dump($nome);//informar o tipo de dado.

//$ip = $_SERVER["REMOTE_ADDR"]; //pegar o ip da pessoa

//echo $ip;

//$ips = $_SERVER["SCRIPT_NAME"];//log de acesso

//echo $ips;

//escopo de variaveis.

/*
$nome = "Rodrigo";

function teste(){ //uma funcao sem parametros

    global $nome;//variavel global
	echo $nome;

}

function teste2(){

    global $nome;
	echo $nome." agora no teste 2";
}

teste(); // chamar a funcao

teste2();

*/


?>

