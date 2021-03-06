<?php require_once("user_authentication_check.php"); ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Warenkorb
            <br/>
            <br/>
            <small>Folgende Artikel befinden sich im Warenkorb:</small>
        </h1>
        <?php require_once("sql/warenkorb_select.php") ?>
        <?php
        if ($userGuthaben >= $gesamtpreis && $resultWarenkorb->num_rows > 0) {
            ?>
            <div class='col-lg-12'>
                <h2>Guthaben: <?php echo $userGuthaben; ?> Fr. - <?php echo $gesamtpreis; ?> Fr. =
                    <h2>
                        <h2>Restguthaben: <?php echo($userGuthaben - $gesamtpreis) ?> </h2>
            </div>

            <div class="col-lg-12">
                <br/>
                <a href="sql/kaufen.php">
                    <Button class="btn btn-lg btn-primary btn-block">Bestätigen</Button>
                </a>
            </div>
        <?php
        } else {
            $_SESSION["bad"] = "Sie haben zu wenig Guthaben";
            header('Location: ../index.php?site=warenkorb');
        }
        ?>
    </div>
</div>

