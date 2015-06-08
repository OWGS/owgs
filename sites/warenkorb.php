<?php require_once("user_authentication_check.php"); ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Warenkorb
            <br/>
            <br/>
            <small>Folgende Artikel befinden sich im Warenkorb:</small>
        </h1>
        <?php
        require_once("sql/warenkorb_select.php");
        if ($resultWarenkorb->num_rows > 0) {
            if ($userGuthaben >= $gesamtpreis) {
                ?>
                <div class='col-lg-12'>
                    <h2>Guthaben: <?php echo $userGuthaben ?> Fr.<h2>
                </div>
                <div class='col-lg-12'>
                    <h2>Gesamtpreis: <?php echo $gesamtpreis ?> Fr.<h2>
                </div>


                <div class="col-lg-12">
                    <br/>
                    <a href="index.php?site=kaufen">
                        <Button class="btn btn-lg btn-primary btn-block">Kaufen</Button>
                    </a>
                </div>
            <?php
            } else {
                echo "<div class='col-lg-12'><h3>Sie haben zu wenig Guthaben.<h3></div>";
                echo "<div class='col-lg-12'><h2>Guthaben: " . $userGuthaben . " Fr.<h2></div>";
                echo "<div class='col-lg-12'><h2>Gesamtpreis: " . $gesamtpreis . " Fr.<h2></div>";
            }
        } else {
            echo "<div class='col-lg-12'><h2>Keine Artikel im Warenkorb<h2></div>";
        }
        ?>
    </div>
</div>

