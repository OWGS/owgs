		<?php require_once("user_authentication_check.php"); ?>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Warenkorb
					<br/>
					<br/>
                    <small>Folgende Artikel befinden sich im Warenkorb:</small>
                </h1>
				<?php require_once("sql/warenkorb_select.php") ?>
			</div>
			<div class="col-lg-12">
				<br/>
				<input type="submit" name="submit" value="Weiter im Bestellvorgang →"", class="btn btn-lg btn-primary btn-block" />
			</div>
            
        </div>

