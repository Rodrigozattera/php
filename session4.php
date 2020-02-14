<?php 

session_id('j13929k7jfm25khujl016344i8');

require_once("config.php");

session_regenerate_id();//gera um id novo

echo session_id();//mostra o id

var_dump($_SESSION);





 ?>