<?php	
	session_start();
	if (!isset($_SESSION["authenticated"])) {
		$_SESSION["authenticated"] = 0;
	}
	require_once("db_connection.php");
	
		$sql_user = "SELECT id FROM users WHERE username = '".$_SESSION["username"]."'";
		$result_user = $conn->query($sql_user);
		
		if ($result_user->num_rows > 0) {
			while($row = $result_user->fetch_assoc()) {
				$user_id = $row["id"];
			}
		}
		
		$produkt_id = $_REQUEST['id'];
		$conn->query("DELETE FROM warenkorb WHERE fk_produkt = ".$produkt_id." AND fk_user = ".$user_id."");
		$_SESSION["good"] = "Warenkorbeintrag erfolgreich gelöscht";
		header( 'Location: ../index.php?site=warenkorb' );