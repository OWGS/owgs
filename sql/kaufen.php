<?php
	session_start();
	
	if (!isset($_SESSION["authenticated"])) {
		$_SESSION["authenticated"] = 0;
	}
	if ($_SESSION["authenticated"] > 0) { 
		require_once("db_connection.php");
        $sqlUser = "SELECT * FROM users WHERE username = '".$_SESSION["username"]."'";
        $resultUser = $conn->query($sqlUser);
        if ($resultUser->num_rows > 0) {
            $user = $resultUser->fetch_assoc();
            $userId = $user["id"];
            $userGuthaben = $user["guthaben"];
        }
        $sqlWarenkorb = "SELECT * FROM warenkorb WHERE fk_user = '".$userId."'";
        $resultWarenkorb = $conn->query($sqlWarenkorb);
        if ($resultWarenkorb->num_rows > 0) {
            $gesamtpreis = 0;
            while($rowWarenkorb = $resultWarenkorb->fetch_assoc()) {
                $produktId = $rowWarenkorb["fk_produkt"];
                $resultProdukt = $conn->query("SELECT * FROM produkt WHERE id = '".$produktId."'");
                while($rowProdukt = $resultProdukt->fetch_assoc()) {
                    $gesamtpreis += $rowProdukt["price"] * $rowWarenkorb["quantity"];

                }
            }
        }
        if ($userGuthaben >= $gesamtpreis) {
            $restguthaben = $userGuthaben - $gesamtpreis;
            $conn->query("UPDATE users SET guthaben=".$restguthaben." WHERE id=".$userId.";");
            $conn->query("DELETE FROM warenkorb WHERE fk_user = ".$userId."");
            $_SESSION["good"] = "Der Kauf wurde erfolgreich abgeschlossen";
            header( 'Location: ../index.php' );
        } else {
            $_SESSION["bad"] = "Sie haben zu wenig Guthaben.";
            header( 'Location: ../index.php' );
        }

	} else {
		header( 'Location: ../index.php?site=login' );
		$_SESSION["bad"] = "Bitte zuerst einloggen oder registrieren.";
	}