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
			while($row = $resultWarenkorb->fetch_assoc()) {
				$produkt_id = $row["fk_produkt"]; 
				$result_produkt = $conn->query("SELECT * FROM produkt WHERE id = '".$produkt_id."'");
				while($rowProdukt = $result_produkt->fetch_assoc()) {
				$gesamtpreis += $rowProdukt["price"];
				?>
					<div class="col-lg-4 col-sm-6 text-center games">
						<img class="img-responsive img-center" src=<?php echo $rowProdukt["bild_path"]; ?> alt=<?php echo $rowProdukt["name"] ?>>
						<h3> <?php echo $rowProdukt["name"] ?> </h3>
						<p> Preis: <?php echo $rowProdukt["price"]; ?> Fr. </p>
						<a href="sql/warenkorb_delete.php?id=<?php echo $rowProdukt["id"] ?>">DELETE</a>
						<h2></h2>
					</div>
				<?php }
			}
		}
		$conn->close();
		
	} else {
		header( 'Location: ../index.php?site=login' );
		$_SESSION["bad"] = "Bitte zuerst einloggen oder registrieren.";
	}