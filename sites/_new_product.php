<?php
/**
 * Created by PhpStorm.
 * User: eeglit
 * Date: 19.05.2015
 * Time: 16:19
 */
<<<<<<< HEAD
require_once(__DIR__."/../user_authentication_check.php");
=======
require_once(__DIR__ . "/../user_authentication_check.php");
>>>>>>> 7cae7d844ef6a90758772aa982681f933d263db0
if ($_SESSION["authenticated"] != 2) {
    $_SESSION["bad"] = "Sie haben nicht genügend Rechte";
    header("Location: index.php?site=login");
}
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Produkt hinzufügen
            <small>Hier können Sie neue Produkte hinzufügen</small>
        </h1>
        <?php
<<<<<<< HEAD
        require_once(__DIR__.'/../sql/insert_product.php');
        ?>
        <form method="post" action="sql/insert_product.php" name="Registrierungsformular">
            <p>Name: </p><input type="text" name="name" class="form-control" placeholder="" required="true" /><br>
            <p>Platform: </p><input type="text" name="platform" class="form-control" placeholder="" required="true" /><br>
            <p>Kategorie: </p><input type="text" name="kategorie" class="form-control" placeholder="" required="true" onkeypress="return onlyText(event);"/><br>
=======
        require_once(__DIR__ . '/../sql/insert_product.php');
        ?>
        <form method="post" action="sql/insert_product.php" name="Registrierungsformular">
            <p>Name: </p><input type="text" name="name" class="form-control" placeholder="" required="true"/><br>

            <p>Platform: </p><input type="text" name="platform" class="form-control" placeholder=""
                                    required="true"/><br>

            <p>Kategorie: </p><input type="text" name="kategorie" class="form-control" placeholder="" required="true"
                                     onkeypress="return onlyText(event);"/><br>
>>>>>>> 7cae7d844ef6a90758772aa982681f933d263db0
            <select class="form-control" id="sel1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
<<<<<<< HEAD
            </select><br />

            <textarea name="beschreibung" rows="5" class="form-control" placeholder="Beschreibung" required="true"></textarea>
            <p>Bild: </p><input type="image" name="bild" class="form-control" placeholder="" required="true" /><br>
            <p>Preis: </p><input type="number" name="preis" class="form-control" placeholder="" maxlength="4" onkeypress="return isNumberKey(event)" required="true" /><br>
            <input type="submit" name="submit" id="submit" value="Update", class="btn btn-lg btn-primary btn-block" onclick="allnumeric(document.Registrierungsformular.plz)"/>
=======
            </select><br/>

            <textarea name="beschreibung" rows="5" class="form-control" placeholder="Beschreibung"
                      required="true"></textarea>

            <p>Bild: </p><input type="image" name="bild" class="form-control" placeholder="" required="true"/><br>

            <p>Preis: </p><input type="number" name="preis" class="form-control" placeholder="" maxlength="4"
                                 onkeypress="return isNumberKey(event)" required="true"/><br>
            <input type="submit" name="submit" id="submit" value="Update" , class="btn btn-lg btn-primary btn-block"
                   onclick="allnumeric(document.Registrierungsformular.plz)"/>
>>>>>>> 7cae7d844ef6a90758772aa982681f933d263db0
        </form>
    </div>
</div>

<script src="js/validationScripts.js"></script>