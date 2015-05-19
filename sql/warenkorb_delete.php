<?php	
	session_start();
	require_once("db_connection.php");
	
		$sqlUser = "SELECT id FROM users WHERE username = '".$_SESSION["username"]."'";
		$resultUser = $conn->query($sqlUser);

		$user = $resultUser->fetch_assoc();
        $userId = $user["id"];
		$produktId = $_REQUEST['id'];

        $resultFindWarenkorb = $conn->query("SELECT * FROM warenkorb WHERE fk_user='".$userId."' AND fk_produkt='".$produktId."'");
        $FindWarenkorb = $resultFindWarenkorb->fetch_assoc();
        if ($resultFindWarenkorb->num_rows > 0 && $FindWarenkorb["quantity"] > 1) {
            $quantity = $FindWarenkorb["quantity"] - 1;
            $conn->query("UPDATE warenkorb SET quantity=".$quantity." WHERE fk_user=".$userId." AND fk_produkt='".$produktId."'");
        } else {
            $conn->query("DELETE FROM warenkorb WHERE fk_produkt = " . $produktId . " AND fk_user = " . $userId . "");
        }


		$_SESSION["good"] = "Warenkorbeintrag erfolgreich gelöscht";
		header( 'Location: ../index.php?site=warenkorb' );