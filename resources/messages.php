<?php
	if ($_SESSION) {
		if (isset($_SESSION["good"])) {
			echo '<div class="alert alert-success" role="alert"><span class="glyphicon" aria-hidden="true"></span><span class="sr-only">Info:</span>'.$_SESSION["good"].'</div>';
			$_SESSION["good"] = null;
		} else if (isset($_SESSION["bad"])) {	
			echo '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><span class="sr-only">Error:</span>'.$_SESSION["bad"].'</div>';
			$_SESSION["bad"] = null;
		} else if (isset($_SESSION["warning"])) {
			$_SESSION["warning"] = null;	
		}
	}