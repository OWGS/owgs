		<!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Registrierung
                    <small>Füllen Sie bitte die Felder aus</small>
                </h1>
				<form method="post" action="user_authentication.php" name="Registrierungsformular">
				<input type="text" name="username" class="form-control" placeholder="Benutzername" required="true" /><br>
				<input type="password" name="password" id="pass1" class="form-control" placeholder="Passwort" required="true" onkeyup="checkPass(); return false;"/><br>
				<input type="password" name="passwordconfirm" id="pass2" class="form-control" placeholder="Passwort bestätigen" required="true" onkeyup="checkPass(); return false;"/> <span id="confirmMessage" class="confirmMessage"></span><br>
				<input type="text" name="name" class="form-control" placeholder="Name" required="true" /><br />
				<input type="text" name="vorname" class="form-control" placeholder="Vorname" required="true" /><br>
				<input type="text" name="adresse" class="form-control" placeholder="Adresse" required="true" /><br>
				<input type="text" name="plz" class="form-control" placeholder="PLZ" maxlength="4" onkeypress="return isNumberKey(event)"><br>
				<input type="text" name="ort" class="form-control" placeholder="Ort" required="true" /><br>
				<input type="number" name="guthaben" min="1" max="1000000" maxlength="4" placeholder="50" class="form-control" required="true" /><br>
				<input type="submit" name="submit" id="submit" value="Registrieren", class="btn btn-lg btn-primary btn-block" onclick="allnumeric(document.Registrierungsformular.plz)" />
				</form>
            </div>
        </div>
		
		
		
		
<script src="js/validationScripts.js"></script>





