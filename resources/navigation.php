<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a class="navbar-brand" href="?site=home">OWGS</a>
            </div>
			

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="?site=shop">Shop</a>
                    </li>
                
                    
					<li>
                        <a href="?site=kontakt">Kontakt</a>
                    </li>
                </ul>
				<ul class="nav navbar-nav pull-right " > 
                    <?php 
						session_start();
						if (!isset($_SESSION["authenticated"])) {
							$_SESSION["authenticated"] = 0;
						}
						if ($_SESSION["authenticated"] > 0) { 
					?>	
					<li>
					 <a href="?site=warenkorb">Warenkorb<img src="img/desing/cart.PNG" style="width:22px;height:22px;border:0"></a>
					</li>
						<?php }  ?>
					<?php if ($_SESSION["authenticated"] > 0) { ?>
                    <li>
                        <a href="?site=settings">Settings</a>
                    </li>
					<li>				
					<a href="?site=logout">Log Out</a>
					</li>
					<?php } else { ?>
                    <li>
                        <a href="?site=registrierung">Registrieren</a>
                    </li>
					<li>
							<a href="?site=login">Log In</a>
					</li>
					<?php }	?>
								
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	<div class="container">
		<?php include_once("messages.php"); ?>
	</div>