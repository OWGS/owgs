<?php
	session_start();
	
	if (!isset($_SESSION["authenticated"])) {
		$_SESSION["authenticated"] = 0;
	}
	if ($_SESSION["authenticated"] > 0) { 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "owgs";
		
		mysql_connect($servername, $username, $password);
		mysql_select_db($dbname);

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		$conn->set_charset('utf8');
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT id FROM users WHERE username = '".$_SESSION["username"]."'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$user_id = $row["id"]; 
			}
		}
		$conn->close();

		$produkt_id = $_REQUEST['id'];
		$sql_insert_warenkorb = "INSERT INTO warenkorb(fk_user, fk_produkt) VALUES('".$user_id."', '".$produkt_id."')";
		mysql_query($sql_insert_warenkorb);
		
		$_SESSION["good"] = "Sie haben den Artikel erfolgreich in den Warenkorb gelegt";
		header( 'Location: ../index.php?site=shop' );
	} else {
		header( 'Location: ../index.php?site=login' );
		$_SESSION["bad"] = "Bitte zuerst einloggen oder registrieren.";
	}