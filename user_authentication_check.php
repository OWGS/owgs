<?php 
	$authenticated = $_SESSION["authenticated"];
 
	if ($authenticated != 1) {
		header("Location: index.php?site=login");
		$_SESSION["bad"] = " Bitte erst einloggen oder Registrieren";
		exit();
	}

//blabla