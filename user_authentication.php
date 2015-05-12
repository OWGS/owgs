<?php 
	session_start();
		require_once("sql/db_connection.php");
		
		if ($_POST['submit'] === "login") {
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$password = $_POST['password'];
			$sqlUser = "SELECT * FROM users WHERE username='".$username."' LIMIT 1";
			$resultUser = $conn->query($sqlUser);
			$user = $resultUser->fetch_assoc();
            $userPassword = $user['password'];
			if (password_verify($password, $userPassword)) {
				$_SESSION["userID"] = $user['id'];
                $_SESSION["authenticated"] = 1;
				$_SESSION["username"] = $username;
				$_SESSION["good"] = "Hallo $username. Sie haben sich erfolgreich angemeldet.";
				header ( 'Location: index.php?site=home' ); 
			} else {
				$_SESSION["authenticated"] = 0;
				$_SESSION["bad"] = "Ihr Username oder Passwort ist ungültig.";
				header ( 'Location: index.php?site=login' );
			}
		} elseif ($_POST['submit'] === "Registrieren") {
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$sqlFindUser = "SELECT * FROM users WHERE username='".$username."'";
			$resultUser = $conn->query($sqlFindUser);
			$User = $resultUser->fetch_assoc();
			if ($User['username'] == $username) {
				$_SESSION["bad"] = " Der Username $username ist bereits vergeben";
				header( 'Location: index.php?site=registrierung' );
			} else {
				$plz = $_POST['plz'];
				$guthaben = $_POST['guthaben'];
				$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
				$name = mysqli_real_escape_string($conn, $_POST['name']);
				$vorname = mysqli_real_escape_string($conn, $_POST['vorname']);
				$adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
				$ort = mysqli_real_escape_string($conn, $_POST['ort']);
				$rolle = "3";
				$conn->query("INSERT INTO users (username,password,name,vorname,adresse,plz,ort,guthaben,fk_rolle) VALUES ('".$username."','".$password."','".$name."','".$vorname."','".$adresse."','".$plz."','".$ort."','".$guthaben."','".$rolle."')");
				$resultUser = $conn->query("SELECT * FROM users WHERE username = '".$username."'");
				$user = $resultUser->fetch_assoc();
				$_SESSION["userID"] = $user['id'];
                $_SESSION["authenticated"] = 1;
				$_SESSION["username"] = $username;
				$_SESSION["good"] = "Willkommen bei OWGS Sie haben sich erfolgreich registriert.";
				header( 'Location: index.php?site=home' );
			} 
		} else {
			header ( 'Location: index.php?site=login' );
			$_SESSION["authenticated"] = 0;
		}
