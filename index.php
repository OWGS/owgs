<!doctype html>
<html>
<head>
<link rel="shortcut icon" href="/img/logo/iconlogo.ico"/>
    <?php require_once("resources/header.html"); ?>
</head>
<body>
<?php require_once("resources/navigation.php"); ?>
<!-- Page Content -->
<div class="container">

    <?php

    $seitenordner = 'sites/';
    $defaultseite = 'home';

    if (!empty($_GET['site'])) {
        $seite = $_GET['site'];
    } else {
        $seite = $defaultseite;
    }

    if (!file_exists($seitenordner . $seite . ".php")) {
        $_SESSION["bad"] = " Die gewünschte Seite wurde nicht gefunden.";
        header("Location: index.php?site=home");
    }

    include $seitenordner . basename($seite . ".php");
    include_once("resources/footer.html"); 
	?>
</div>
</body>
</html>
