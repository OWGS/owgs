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
                <a href="sql/kaufen.php"><Button class="btn btn-lg btn-primary btn-block">Bestätigen</Button></a>
			</div>
            <?php
                require_once(__DIR__."/../sql/MysqlConnection.php");
                require_once(__DIR__."/../resources/User.php");

                $connection = MysqlConnection::getConnection();
                $user = new User($connection);
                $found = $user->find_all();
            ?>
        </div>