<?php 

require_once("config.php");

echo session_save_path();//onde esta salvando a session no seu pc


echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {

	case PHP_SESSION_DISABLED:

		echo "as sessoes estao desabilitadas";

		break;
	
	case PHP_SESSION_NONE:

		echo "session habilitada mas n iniciada"; 

		break;

	case PHP_SESSION_ACTIVE:

		echo "as sessoes estiverem habilitadas, e uma existir"; 

		break;
}


 ?>