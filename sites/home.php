<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Willkommen bei:
            <small>OWGS -> Oberwalliser Game Shop</small>
        </h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
    </div>
</div>
<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Neueste Games:</h2>
	</div>
	
	<?php 
		require_once("sql/new_games.php");
		if ($result->num_rows > 0) {
		// output data of each row
			while($row = $result->fetch_assoc()) {
				

	?>
	
	<div class="col-lg-4 col-sm-6 text-center games">
		<a href="index.php?site=show_game&id=<?php echo $row["id"] ?>"><img class="img-responsive img-center" src=<?php echo $row["bild_path"]; ?> alt=<?php echo $row["name"] ?>></a>
		<h3> <?php echo $row["name"] ?> </h3>
		<p> Preis: <?php echo $row["price"]; ?> Fr. </p>
		<a href="sql/warenkorb.php?id=<?php echo $row["id"] ?>">In den Warenkorb<img src="img/desing/cartcolored.PNG" style="width:22px;height:22px;border:0"></a>
	</div>
	
	<?php }
		} else {
			echo "Keine Produkte gefunden";
		}
		$conn->close();
	?>
</div>
<br>
<a href="index.php?site=shop"><Button>Mehr Games...</Button></a> 