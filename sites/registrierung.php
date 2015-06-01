<!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Registrierung
                    <small>Füllen Sie bitte die Felder aus</small>
                </h1>
				<form method="post" action="user_authentication.php" name="Registrierungsformular">
				<input type="text" name="username" class="form-control" placeholder="Benutzername" required="true" /><br>
				<input type="email" name="email" class="form-control" placeholder="E-Mail" required="true" /><br>
				<input type="password" name="password" id="pass1" class="form-control" placeholder="Passwort (mind. 8 Zeichen)" required="true" onkeyup="checkPass()" /><br>
				<input type="password" name="passwordconfirm" id="pass2" class="form-control" placeholder="Passwort bestätigen" required="true" onkeyup="checkPass()"/> <span id="confirmMessage" class="confirmMessage"></span><br>
				<input type="text" name="name" class="form-control" placeholder="Name" required="true" onkeypress="return onlyText(event);"/><br />
				<input type="text" name="vorname" class="form-control" placeholder="Vorname" required="true" onkeypress="return onlyText(event);"/><br>
				<input type="text" name="adresse" class="form-control" placeholder="Adresse" required="true" /><br>
				<input type="text" name="plz" class="form-control" placeholder="PLZ" maxlength="4" onkeypress="return isNumberKey(event)" required="true" /><br>
				<input type="text" name="ort" class="form-control" placeholder="Ort" required="true" onkeypress="return onlyText(event);"/><br>
				<input type="text" name="guthaben" class="form-control" min="1" max="1000000" placeholder="Guthaben" maxlength="5" onkeypress="return isNumberKey(event)" required="true" /><br>
				<input type="submit" name="submit" id="submit" value="Registrieren", class="btn btn-lg btn-primary btn-block" onclick="allnumeric(document.Registrierungsformular.plz)" />
				</form>
	        </div>
        </div>

		
<script src="js/validationScripts.js"></script>

