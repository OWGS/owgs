<?php
    /**
     * Quelle Pagination: http://www.Awcore.com/dev
     */
    //get the pagination function
    require_once(__DIR__."/../functions/pagination.php");

    $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
    $limit = 12;
    $startpoint = ($page * $limit) - $limit;
?>


<div class="row" xmlns="http://www.w3.org/1999/html">
    <div class="col-lg-12">
        <h1 class="page-header">Shop</h1>
    </div>
        <a class="btn btn-lg btn-primary" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Filter:
        </a>
        <a class="btn btn-lg btn-primary" href="index.php?site=shop">
            Filter löschen
        </a>
        <div class="collapse" id="collapseExample">
            <div class="col-lg-12">
            <h4>Filter:</h4>
            <form method="get" action="index.php">
            <input type="hidden" name="site" value="shop">
            <input type="text" name="suche" class="form-control col-lg-4 col-sm-6" placeholder="Suche nach Name" />
            <br />
        </div>
        <div class="col-lg-4 col-sm-6">
            <h5>Platform:</h5>
            <input type="hidden" name="site" value="shop" >
            <?php
                require_once(__DIR__."/../sql/select_games.php");
                while($platform = $resultAllPlatforms->fetch_assoc()) {
           ?>
                    <div class="radio">
                        <label>
                            <input type="radio" name="platform" id="platform" value=<?php echo $platform["id"] ?>>
                            <?php
                                echo $platform["name"]
                            ?>
                        </label>
                    </div>
           <?php
                } //End while platform
           ?>
        </div>
        <div class="col-lg-4 col-sm-6">
            <h5>Kategorie:</h5>
            <?php
                while($kategorie = $resultAllKategories->fetch_assoc()) {
            ?>
                    <div class="radio">
                        <label>
                            <input type="radio" name="kategorie" id="kategorie" value=<?php echo $kategorie["id"] ?>>
                            <?php
                                echo $kategorie["name"]
                            ?>
                            </label>
                    </div>
            <?php
                } //end while kategorie
            ?>
        </div>
        <div class="col-lg-12">
            <input type="submit" name="submit" value="Suchen", class="btn btn-lg btn-primary btn-block" />
            </form> <!-- Ende des forms für die Filter -->
        </div>
    </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<h2 class="page-header">Games:</h2>
	</div>

	<?php
		if ($resultGames->num_rows > 0) {
			while($row = $resultGames->fetch_assoc()) {
	?>


		<div class="col-lg-4 col-sm-6 text-center games">
					<a href="index.php?site=show_game&id=<?php echo $row["id"] ?>"><img class="img-responsive img-center" src=<?php echo $row["bild_path"]; ?> alt=<?php echo $row["name"] ?>></a>
					<h3> <?php echo GameNameKuerzen($row["name"]); ?> </h3>
					<p> Preis: <?php echo $row["price"]; ?> Fr. </p>
					<a href="sql/warenkorb.php?id=<?php echo $row["id"] ?>">In den Warenkorb<img src="img/desing/cartcolored.PNG" style="width:22px;height:22px;border:0"></a>
				<br>
				<br>
				</div>
            <?php }
        } else {
            echo "Keine Produkte gefunden";
        }
    ?>

</div>

<div class="row">
    <div class="text-center">
         <?php
            echo pagination($resultGamesAll->num_rows,$limit,$page,$_SERVER['REQUEST_URI']."&");
            $conn->close();
         ?>
    </div>
</div>

<a href=javascript:void(0); onclick=gotoTop();><Button>Nach Oben ↑</Button></a>
<script src="js/toTopScript.js"></script>