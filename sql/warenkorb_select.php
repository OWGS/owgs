<?php	
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

		$sql_user = "SELECT id FROM users WHERE username = '".$_SESSION["username"]."'";
		$result_user = $conn->query($sql_user);
		
		if ($result_user->num_rows > 0) {
			while($row = $result_user->fetch_assoc()) {
				$user_id = $row["id"]; 
			}
		}
		$sql_warenkorb = "SELECT * FROM warenkorb WHERE fk_user = '".$user_id."'";
		$result_warenkorb = $conn->query($sql_warenkorb);
		
		if ($result_warenkorb->num_rows > 0) {
			$gesamtpreis = 0;
			while($row = $result_warenkorb->fetch_assoc()) {
				$produkt_id = $row["fk_produkt"]; 
				$result_produkt = $conn->query("SELECT * FROM produkt WHERE id = '".$produkt_id."'");
				while($row_produkt = $result_produkt->fetch_assoc()) { 
				$gesamtpreis =  $gesamtpreis + $row_produkt["price"];
				?>
					<div class="col-lg-4 col-sm-6 text-center games">
						<img class="img-responsive img-center" src=<?php echo $row_produkt["bild_path"]; ?> alt=<?php echo $row_produkt["name"] ?>>
						<h3> <?php echo $row_produkt["name"] ?> </h3>
						<p> Preis: <?php echo $row_produkt["price"]; ?> Fr. </p>
						<a href="sql/warenkorb_delete.php?id=<?php echo $row_produkt["id"] ?>">DELETE</a>
						<h2></h2>
					</div>
				<?php }
			}
			echo "<div class='col-lg-12'><h2>Gesamtpreise: ".$gesamtpreis." Fr.<h2></div>";
		}
		$conn->close();
		
	} else {
		header( 'Location: ../index.php?site=login' );
		$_SESSION["bad"] = "Bitte zuerst einloggen oder registrieren.";
	}