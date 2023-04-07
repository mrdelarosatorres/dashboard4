<?php
	switch ($_GET["op"]){
		case 'login':
			//$auth = $_SESSION['token'];
			$email = $_POST["email"];
			$password = $_POST["password"];
			if ($email && $password ) {
				$result = 1;
			}
			echo $result;
		break;


	}
?>