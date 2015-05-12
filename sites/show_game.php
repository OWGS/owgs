<?php 
	require_once("sql/select_game.php");
	if ($result_game->num_rows > 0) {
	// output data of each row
?>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><?php echo $game["name"] ?></h1>
			</div>
		</div>
		<div class="row">


			<div class="col-lg-4 col-sm-6 text-center">
				<img class="img-responsive img-center" src=<?php echo $game["bild_path"]; ?> alt=<?php echo $game["name"] ?>>
			</div>
			<div class="col-lg-8 col-sm-6">
				<h4> Name: <small><?php echo $game["name"] ?></small></h4>
				<h4> Beschreibung: <small><?php echo $game["description"] ?> </small></h4>
				<h4> Platform: <small><?php echo $game_platform["name"] ?> </small></h4>
				<h4> Kategorie <small><?php echo $game_kategorie["name"] ?> </small></h4>
				<h4> Preis: <small><?php echo $game["price"] ?> Fr.</small></h4>
				<a href="sql/warenkorb.php?id=<?php echo $game["id"] ?>">In den Warenkorb<img src="img/desing/cartcolored.PNG" style="width:22px;height:22px;border:0"></a>
			</div>
	<?php 
		} else {
			echo "Keine Produkte gefunden";
		}
		$conn->close();
	?>
</div>
		