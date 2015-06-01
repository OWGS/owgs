<?php	
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
				$produkt_id = $rowWarenkorb["fk_produkt"];
				$result_produkt = $conn->query("SELECT * FROM produkt WHERE id = '".$produkt_id."'");
				while($rowProdukt = $result_produkt->fetch_assoc()) {
				    $gesamtpreis += $rowProdukt["price"] * $rowWarenkorb["quantity"];
?>
					<div class="col-lg-4 col-sm-6 text-center games">
                        <a href="index.php?site=show_game&id=<?php echo $rowProdukt["id"] ?>">
						    <img class="img-responsive img-center" src=<?php echo $rowProdukt["bild_path"]; ?> alt=<?php echo $rowProdukt["name"] ?>>
                        </a>
						<h3> <?php echo $rowProdukt["name"] ?> </h3>
						<p> Einzelpreis: <?php echo $rowProdukt["price"]; ?> Fr. Stückzahl: <?php echo $rowWarenkorb["quantity"]; ?> </p>
						<a href="sql/warenkorb_delete.php?id=<?php echo $rowProdukt["id"] ?>">DELETE</a>
						<h2></h2>
					</div>
				<?php } // end while $rowProdukt
			} // end while $rowWarenkorb
		} // end if $resultWarenkorb
		$conn->close();
	} else {
		header( 'Location: ../index.php?site=login' );
		$_SESSION["bad"] = "Bitte zuerst einloggen oder registrieren.";
	}