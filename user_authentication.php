<?php 
	session_start();
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "owgs";

		mysql_connect($host, $user, $pass);
		mysql_select_db($db);
		
		if ($_POST['submit'] == "login") {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
			$res = mysql_query($sql);
			if (mysql_num_rows($res) == 1) {
				$_SESSION["authenticated"] = 1;
				$_SESSION["username"] = $username;			
				$_SESSION["good"] = "Hallo $username. Sie haben sich erfolgreich angemeldet.";
				header ( 'Location: index.php?site=home' ); 
			} else {
				$_SESSION["authenticated"] = 0;
				$_SESSION["bad"] = "Ihr Username oder Passwort ist ungültig.";
				header ( 'Location: index.php?site=login' );
			}
		} else if ($_POST['submit'] == "Registrieren") {
			$username = $_POST['username'];
			$sql_find_user = "SELECT * FROM users WHERE username='".$username."'";
			$res = mysql_query($sql_find_user);
			if (mysql_num_rows($res) > 0) {
				$_SESSION["bad"] = " Der Username $username ist bereits vergeben";
				header( 'Location: index.php?site=registrierung' );
			} else {
				$password = $_POST['password'];
				$name = $_POST['name'];
				$vorname = $_POST['vorname'];
				$adresse = $_POST['adresse'];
				$plz = $_POST['plz'];
				$ort = $_POST['ort'];
				$guthaben = $_POST['guthaben'];
				$rolle = "3";
				$sql_insert_user = "INSERT INTO users (username,password,name,vorname,adresse,plz,ort,guthaben,fk_rolle) VALUES ('".$username."','".$password."','".$name."','".$vorname."','".$adresse."','".$plz."','".$ort."','".$guthaben."','".$rolle."')";
				mysql_query($sql_insert_user);
				header( 'Location: index.php?site=home' );
				$_SESSION["authenticated"] = 1;
				$_SESSION["username"] = $username;
				$_SESSION["good"] = "Willkommen bei OWGS Sie haben sich erfolgreich registriert.";
			}
		} else {
			header ( 'Location: index.php?site=login' );
			$_SESSION["authenticated"] = 0;
		}
