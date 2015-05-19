<?php
	session_start();
	
	if (!isset($_SESSION["authenticated"])) {
		$_SESSION["authenticated"] = 0;
	}
	if ($_SESSION["authenticated"] > 0) {
        require_once(__DIR__."/db_connection.php");

		$sqlUser = "SELECT id FROM users WHERE username = '".$_SESSION["username"]."'";
		$resultUser = $conn->query($sqlUser);
		$user = $resultUser->fetch_assoc();
		$userId = $user["id"];

		$produktId = $_REQUEST['id'];

        $resultFindWarenkorb = $conn->query("SELECT * FROM warenkorb WHERE fk_user='".$userId."' AND fk_produkt='".$produktId."'");
        if ($resultFindWarenkorb->num_rows > 0) {
            $FindWarenkorb = $resultFindWarenkorb->fetch_assoc();
            $quantity = $FindWarenkorb["quantity"] + 1;
            $conn->query("UPDATE warenkorb SET quantity=".$quantity." WHERE fk_user=".$userId." AND fk_produkt='".$produktId."'");
        } else {
            $conn->query("INSERT INTO warenkorb(fk_user, fk_produkt) VALUES('" . $userId . "', '" . $produktId . "')");
        }
            if (!$conn->error) {
                $_SESSION["good"] = "Sie haben den Artikel erfolgreich in den Warenkorb gelegt";
                header('Location: ../index.php?site=warenkorb');
            } else {
                $_SESSION["bad"] = $conn->error;
            }
            $conn->close();
	} else {
		header( 'Location: ../index.php?site=login' );
		$_SESSION["bad"] = "Bitte zuerst einloggen oder registrieren.";
	}