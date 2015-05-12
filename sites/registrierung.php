		<!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Registrierung
                    <small>Füllen Sie bitte die Felder aus</small>
                </h1>
				<form method="post" action="user_authentication.php">
				<input type="text" name="username" class="form-control" placeholder="Username" required="true" /><br />
				<input type="password" name="password" class="form-control" placeholder="Password" required="true" /><br />
				<input type="text" name="name" class="form-control" placeholder="Name" required="true" /><br />
				<input type="text" name="vorname" class="form-control" placeholder="Vorname" required="true" /><br />
				<input type="text" name="adresse" class="form-control" placeholder="Adresse" required="true" /><br />
				<input type="number" name="plz" min="1" max="1000000" class="form-control" placeholder="PLZ" required="true" /><br />
				<input type="text" name="ort" class="form-control" placeholder="Ort" required="true" /><br />	
				<input type="number" name="guthaben" min="1" max="1000000" placeholder="50" class="form-control" required="true" /><br />
				<input type="submit" name="submit" value="Registrieren", class="btn btn-lg btn-primary btn-block" />
            </div>
        </div>
