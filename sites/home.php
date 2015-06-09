<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Willkommen bei:
            <small>OWGS -> Oberwalliser Game Shop</small>
        </h1>
        <p>Willkomen im Oberwalliser Game Shop. Auf OWGS können Sie verschiedene Konsolen und Pc Spiele kaufen.</p>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Neueste Games:</h2>
    </div>

    <?php
    require_once("sql/new_games.php");
    if ($resultNewGames->num_rows > 0) {
        // output data of each row
        while ($NewGame = $resultNewGames->fetch_assoc()) {
            ?>

            <div class="col-lg-4 col-sm-6 text-center games">
                <a href="index.php?site=show_game&id=<?php echo $NewGame["id"] ?>">
                    <img class="img-responsive img-center"
                         src=<?php echo $NewGame["bild_path"]; ?> alt=<?php echo $NewGame["name"] ?>>
                </a>

                <h3> <?php echo GameNameKuerzen($NewGame["name"]) ?> </h3>

                <p> Preis: <?php echo $NewGame["price"]; ?> Fr. </p>
                <a href="sql/warenkorb.php?id=<?php echo $NewGame["id"] ?>">In den Warenkorb<img
                        src="img/desing/cartcolored.PNG" style="width:22px;height:22px;border:0"></a>
                <br>
                <br>
            </div>

        <?php } // End while NewGame
    } else {
        echo "Keine Produkte gefunden";
    }
    $conn->close();
    ?>
</div>
<br>
<a href="index.php?site=shop">
    <Button>Mehr Games...</Button>
</a>