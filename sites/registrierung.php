<!-- Introduction Row -->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Registrierung
                    <small>Füllen Sie bitte die Felder aus</small>
                </h1>
					<?php 
					if (isset($_GET['fail']) && $_GET['fail'] == 1){
		 			?>			
		 				<form method="post" action="user_authentication.php" name="Registrierungsformular">
						<p>Username: </p><input type="text" name="username" class="form-control" placeholder="username" required="true" /><br>
						<p>E-Mail: </p><input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email'];?>" required="true" /><br>
						<p>Passwort: </p><input type="password" name="password" id="pass1" class="form-control" placeholder="Passwort (mind. 8 Zeichen)" required="true" onkeyup="checkPass()" /><br>
						<p>Passwort betätigen: </p><input type="password" name="passwordconfirm" id="pass2" class="form-control" placeholder="Passwort bestätigen" required="true" onkeyup="checkPass()"/> <span id="confirmMessage" class="confirmMessage"></span><br>
						<p>Neme: </p><input type="text" name="name" class="form-control" value="<?php echo $_SESSION['name'];?>" required="true" onkeypress="return onlyText(event);"/><br />
                        <p>Vorname: </p><input type="text" name="vorname" class="form-control" value="<?php echo $_SESSION['vorname'];?>" required="true" onkeypress="return onlyText(event);"/><br>
                        <p>Adresse: </p><input type="text" name="adresse" class="form-control" value="<?php echo $_SESSION['adresse'];?>" /><br>
                        <p>PLZ: </p><input type="text" name="plz" class="form-control" value="<?php echo $_SESSION['plz'];?>" maxlength="4" onkeypress="return isNumberKey(event)" required="true" /><br>
                        <p>Ort: </p><input type="text" name="ort" class="form-control" value="<?php echo $_SESSION['ort'];?>" required="true" onkeypress="return onlyText(event);"/><br>
                        <p>Guthaben: </p><input type="text" name="guthaben" class="form-control" min="1" max="1000000" value="<?php echo $_SESSION['guthaben'];?>" maxlength="5" onkeypress="return isNumberKey(event)" required="true" /><br>
						<input type="submit" name="submit" id="submit" value="Registrieren", disabled="true" class="btn btn-lg btn-primary btn-block" onclick="allnumeric(document.Registrierungsformular.plz)"/>
						</form>
					<?php 
					} else { 
					?>
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
						<input type="submit" name="submit" id="submit" value="Registrieren", disabled="true" class="btn btn-lg btn-primary btn-block" onclick="allnumeric(document.Registrierungsformular.plz)" />
						</form>
						  
					<?php // end if $_GET
					} ?>
	        </div>
        </div>

<script src="js/validationScripts.js"></script>

