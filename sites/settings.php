<?php require_once(__DIR__."/../user_authentication_check.php"); ?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Settings
            <small>Hier können Sie ihre Daten bearbeiten</small>
        </h1>
        <?php
            require_once(__DIR__.'/../sql/user_settings.php');
        ?>
        <form method="post" action="sql/user_settings.php" name="Registrierungsformular">
            <p>Username: </p><input type="text" name="username" class="form-control" value=<?php echo $username; ?> required="true" /><br>
            <p>E-Mail: </p><input type="email" name="email" class="form-control" value=<?php echo $email; ?> required="true" /><br>
            <p>Name: </p><input type="text" name="name" class="form-control" value=<?php echo $name; ?> required="true" onkeypress="return onlyText(event);"/><br />
            <p>Vorname: </p><input type="text" name="vorname" class="form-control" value=<?php echo $vorname; ?> required="true" onkeypress="return onlyText(event);"/><br>
            <p>Adresse: </p><input type="text" name="adresse" class="form-control" value=<?php echo $adresse; ?> required="true" /><br>
            <p>PLZ: </p><input type="text" name="plz" class="form-control" value=<?php echo $plz; ?> maxlength="4" onkeypress="return isNumberKey(event)" required="true" /><br>
            <p>Ort: </p><input type="text" name="ort" class="form-control" value=<?php echo $ort; ?> required="true" onkeypress="return onlyText(event);"/><br>
            <p>Guthaben: </p><input type="text" name="guthaben" class="form-control" min="1" max="1000000" value=<?php echo $guthaben; ?> maxlength="5" onkeypress="return isNumberKey(event)" required="true" /><br>
            <input type="submit" name="submit" id="submit" value="Update", class="btn btn-lg btn-primary btn-block" onclick="allnumeric(document.Registrierungsformular.plz)"/>
        </form>
    </div>
</div>

<script src="js/validationScripts.js"></script>