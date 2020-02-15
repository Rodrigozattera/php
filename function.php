<?php 


/*

function ola(){


return "Ola Mundo! <br>";


};


echo ola();

$frase = ola();

echo strlen($frase);// mostra o numero de caractere dentro da $

/*

/*

function salario(){

return 946.00;

};

echo "Jose recebeu 3 salarios: ".(salario()*3);

*/

/*
function ola($text="Mundo", $periodo){


return "Ola $text! $periodo! <br>";


};


echo ola("mundo","aee");
echo ola("","Boa noite");
echo ola("marcio","Boa tarde");

*/

/*
function ola(){


	$argumentos = func_get_args();

	return $argumentos;

}


var_dump (ola("bom dia", 10));

*/


/*
$a = 10;



function trocaValor(&$b){ // o & ele passa por referencia e muda o valor da variavel raiz


	$b += 50;

	return $b;

}




echo trocaValor($a);

echo "<br>";

echo trocaValor($a);

echo "<br>";

echo $a;




*/


/*

$pessoa = array('nome' => 'joao','idade' => 20 );

foreach ($pessoa as &$value) {

	if(gettype($value)=== 'integer') $value += 10;
	
	echo $value.'<br>';

}

print_r($pessoa);


*/

/*

function soma(int ...$valores):string {//pega um valor e trasforma em outro


	return array_sum($valores);//array_sum biblioteca que ja soma



}

echo var_dump(soma(2,2));

echo "<br>";

echo soma(25,33);

echo "<br>";

echo soma(1.5,3.2);

echo "<br>";


*/













































































 ?>