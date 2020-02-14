<?php 
/*

IF 


$qualASuaIdade = 31;


$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if (($qualASuaIdade >= $idadeCrianca)&&($qualASuaIdade == 30)) {

echo "olaaa";

}else{

	echo "batata";
}


echo"<br>";

echo ($qualASuaIdade < $idadeMaior)?"menor de idade":"maior de idade"; // ?entao : else.

*/
/*

SWITCH

$diaDaSemana = 3;//date("w");// mostra o dia da semana

switch ($diaDaSemana) {
	case 0:
	echo "domingo";
	break;
	case 1:
	echo "segunda";
	break;
	case 2:
	echo "terca";
	break;
	case 3:
	echo "quarta";
	break;
	case 4:
	echo "quinta";
	break;
	case 5:
	echo "sexta";
	break;
	case 6:
	echo "sabado";
	break;

	default:
	echo "data invalida";
	break;
}

*/

//FOR

//for ($i=0; $i <= 10 ; $i++) {

//echo $i . "<br>";
	
//}
/*


$cont = 0;

for ($i=0; $i <= 100; $i++) { 
	
	if ($i%2==0) {

		echo $i . "<br>";

		$cont += 1;
		
	}


}

echo $cont . "Numeros pares";
*/
/*
 FOREACH
$meses =array("janeiro", "fevereiro","marco");

foreach ($meses as $index => $mes) {

	echo "indice: ".$index."<br>";
	echo "O mes e : ".$mes."<br>";
}
EXEMPLO COM FORMULARIO
*/ 
?>

<form>
	
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" value="OK">


</form>

<?php
/* 
if(isset($_GET)){

	foreach ($_GET as $key => $value) {


		echo "Nome do campo: ". $key."<br>";

		echo "Valor do campo: ". $value;

		echo "<hr>";
		
	}
	}
*/
/*

WHILE

$condicao = true;

while ($condicao) {
	
	$numero = rand(1, 10);//sortear qualquer numero que vc colocar

	if ($numero === 3) {

		echo "TRES !!";

		$condicao = false;
	}

	echo $numero . " ";

}
*/
/*
DO WHILE


$total = 150;
$desconto = 0.9;

do{

	$total *= $desconto;

}while($total > 100);

echo $total;

*/




 ?>
