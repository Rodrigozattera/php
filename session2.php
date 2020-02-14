<?php 

require_once("config.php");

session_unset($_SESSION['nome']);// apaga a session

echo $_SESSION['nome'];


session_destroy();



 ?>